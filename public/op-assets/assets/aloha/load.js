
/** load javascripts **/
var alohaEditorPath = 'assets/aloha/';

// load requireJS
// loadJS( alohaEditorPath + 'lib/hammer.js');
loadJS( alohaEditorPath + 'lib/require.js');

/*
	jQuery

	Here we add our own jQuery version for demonstration usage.
	You can also just use the jQuery version delivered with Aloha Editor.
*/
loadJS( alohaEditorPath + 'lib/vendor/jquery-1.7.1.js');

// config for demo-app in aloha dev github repos
loadJS(alohaEditorPath + 'aloha-config/minimal-config.js');



// load Aloha Editor with Plugins
loadJS( alohaEditorPath + 'lib/aloha.js', 	'common/ui, \
	common/format, \
	common/table, \
	common/list, \
	common/link, \
	common/highlighteditables, \
	common/undo, \
	common/contenthandler, \
	common/paste, \
	common/characterpicker, \
	common/commands, \
	common/block, \
	common/image, \
	common/abbr, \
	common/horizontalruler, \
	common/align, \
	common/dom-to-xhtml, \
	extra/textcolor, \
	extra/formatlesspaste, \
	extra/hints, \
	extra/toc, \
	extra/headerids, \
	extra/listenforcer, \
	extra/metaview, \
	extra/numerated-headers, \
	extra/ribbon, \
	extra/sourceview, \
	extra/textcolor, \
	extra/wai-lang, \
	extra/linkbrowser, \
	extra/cite, \
	cmsplugin/cms'
);

loadCSS( alohaEditorPath + 'css/aloha.css');

/**
 * helpers ++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

/**
 * insert a css script tag into the head of a html page
*/
function loadCSS( href, media ) {
	var headID = document.getElementsByTagName("head")[0];         
	var cssNode = document.createElement('link');
	
	cssNode.type = 'text/css';
	cssNode.rel = 'stylesheet';
	cssNode.href = href;
	if ( media ) {
		cssNode.media = media;
	}
	
	headID.appendChild(cssNode);
}

/**
 * insert a js script tag into the head of a html page
*/
function loadJS( src, plugins ) {
	var headID = document.getElementsByTagName("head")[0];         
	var newScript = document.createElement('script');
	
	newScript.type = 'text/javascript';
	newScript.src = src;
	if ( plugins ) {
		newScript.setAttribute('data-aloha-plugins', plugins);
	}
	
	headID.appendChild(newScript);
}

/**
 * check if a file exists
*/
function fileExists( url ) {
	oHttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
	oHttp.open("HEAD", url, false);
	oHttp.send();
	return ( oHttp.status == 404 ) ? false : true;
}

function loadAloha(Aloha) {
	Aloha.ready( function() {
		Aloha.jQuery('.editable').aloha();
	});
};