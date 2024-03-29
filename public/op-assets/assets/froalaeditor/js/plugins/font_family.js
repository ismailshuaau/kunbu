/*!
 * froala_editor v2.6.0 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

!function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof module && module.exports ? module.exports = function(b, c) {
        return void 0 === c && (c = "undefined" != typeof window ? require("jquery") : require("jquery")(b)),
        a(c)
    }
    : a(window.jQuery)
}(function(a) {
    a.extend(a.FE.DEFAULTS, {
        fontFamily: {
            "Faruma": "ފަރުމާ",
            "DAM_Kathivalhi": "ކަތިވަޅި",
            "Faseyha": "ފަސޭހަ",
            "MV Waheed": "ވަހީދް",
            "Arial,Helvetica,sans-serif": "Arial",
            "Georgia,serif": "Georgia",
            "Impact,Charcoal,sans-serif": "Impact",
            "Tahoma,Geneva,sans-serif": "Tahoma",
            "Times New Roman,Times,serif,-webkit-standard": "Times New Roman",
            "Verdana,Geneva,sans-serif": "Verdana"
        },
        fontFamilySelection: !1,
        fontFamilyDefaultSelection: "Font Family"
    }),
    a.FE.PLUGINS.fontFamily = function(b) {
        function c(a) {
            b.format.applyStyle("font-family", a)
        }
        function d(a, b) {
            b.find(".fr-command.fr-active").removeClass("fr-active").attr("aria-selected", !1),
            b.find('.fr-command[data-param1="' + g() + '"]').addClass("fr-active").attr("aria-selected", !0);
            var c = b.find(".fr-dropdown-list")
              , d = b.find(".fr-active").parent();
            d.length ? c.parent().scrollTop(d.offset().top - c.offset().top - (c.parent().outerHeight() / 2 - d.outerHeight() / 2)) : c.parent().scrollTop(0)
        }
        function e(b) {
            var c = b.replace(/(sans-serif|serif|monospace|cursive|fantasy)/gi, "").replace(/"|'| /g, "").split(",");
            return a.grep(c, function(a) {
                return a.length > 0
            })
        }
        function f(a, b) {
            for (var c = 0; c < a.length; c++)
                for (var d = 0; d < b.length; d++)
                    if (a[c] == b[d])
                        return [c, d];
            return null
        }
        function g() {
            var c = a(b.selection.element()).css("font-family")
              , d = e(c)
              , g = [];
            for (var h in b.opts.fontFamily)
                if (b.opts.fontFamily.hasOwnProperty(h)) {
                    var i = e(h)
                      , j = f(d, i);
                    j && g.push([h, j])
                }
            return 0 === g.length ? null : (g.sort(function(a, b) {
                var c = a[1][0] - b[1][0];
                return 0 === c ? a[1][1] - b[1][1] : c
            }),
            g[0][0])
        }
        function h(c) {
            if (b.opts.fontFamilySelection) {
                var d = a(b.selection.element()).css("font-family").replace(/(sans-serif|serif|monospace|cursive|fantasy)/gi, "").replace(/"|'|/g, "").split(",");
                c.find("> span").text(b.opts.fontFamily[g()] || d[0] || b.opts.fontFamilyDefaultSelection)
            }
        }
        return {
            apply: c,
            refreshOnShow: d,
            refresh: h
        }
    }
    ,
    a.FE.RegisterCommand("fontFamily", {
        type: "dropdown",
        displaySelection: function(a) {
            return a.opts.fontFamilySelection
        },
        defaultSelection: function(a) {
            return a.opts.fontFamilyDefaultSelection
        },
        displaySelectionWidth: 120,
        html: function() {
            var a = '<ul class="fr-dropdown-list" role="presentation">'
              , b = this.opts.fontFamily;
            for (var c in b)
                b.hasOwnProperty(c) && (a += '<li role="presentation"><a class="fr-command" tabIndex="-1" role="option" data-cmd="fontFamily" data-param1="' + c + '" style="font-family: ' + c + '" title="' + b[c] + '">' + b[c] + "</a></li>");
            return a += "</ul>"
        },
        title: "Font Family",
        callback: function(a, b) {
            this.fontFamily.apply(b)
        },
        refresh: function(a) {
            this.fontFamily.refresh(a)
        },
        refreshOnShow: function(a, b) {
            this.fontFamily.refreshOnShow(a, b)
        },
        plugin: "fontFamily"
    }),
    a.FE.DefineIcon("fontFamily", {
        NAME: "font"
    })
});
