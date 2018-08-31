@extends('layouts.app')

@section('head-extra')
@endsection

@section('nav-sliders-bg')
			<div class="nav-background">
        <div class="pattern active" style="background-image: url('http://placehold.it/1400x300');"></div>
      </div>
@endsection

@section('nav-sliders-slide')
        <div class="nav-header center">
          <h1>DESTINATIONS</h1>
          <div class="tagline">Transfer to almost every atoll in the Maldives</div>
        </div>
@endsection

@section('nav-extra')
    <nav>
      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper grey darken-3">
        <div class="categories-container">
          <ul class="categories container">
            <li class="active"><a href="#all">All</a></li>
            <li><a href="#polygon">Aa</a></li>
            <li><a href="#bigbang">Adh</a></li>
            <li><a href="#sacred">K</a></li>
          </ul>
        </div>
      </div>

    </nav>
@endsection

@section('content')
    <!-- Gallery -->
    <div id="portfolio" class="section gray">
      <div class="container">
        <div class="gallery row">
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="img/ukulhas.jpg" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span><b>Aa. Ukulhas</b><br/><b>Transfer Types:</b> Private Speed, Shared Speed, Public Ferry<br/><b>Vessels Available:</b> 4 Speed Boats, 1 Ferry</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Aa. Ukulhas</h3>
                  <span class="price"><b>Transfer Types:</b> Private Speed, Shared Speed, Public Ferry<br/><b>Vessels Available:</b> 4 Speed Boats, 1 Ferry</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

                <div class="destination-vessels-wrapper grey lighten-5 z-depth-2">
                  <div class="row">
                    <div class="col s12">
                      <span class="card-title">Available Transfer</br><small>Choose the transfer method you preffer.</small></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l4 m6 s12">
                      <div class="card-panel card-destination-vessel">
                        <a class="cover gray">
                          <img class="responsive-img" src="img/nevi-1.png" alt="Vessel Name : Number of Seats Left">
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                        </a>
                        <div class="header">
                          <span class="title">Nevi</span></br>
                          <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                          <span>Speed: 48.25 km/h</span></br>
                          <span>Capacity: 27 seats</span></br>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-panel card-destination-vessel">
                        <a class="cover gray">
                          <img class="responsive-img" src="http://placehold.it/300x215" alt="Vessel Name : Number of Seats Left">
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                        </a>
                        <div class="header">
                          <span class="title">Nevi 2</span></br>
                          <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                          <span>Speed: 48.25 km/h</span></br>
                          <span>Capacity: 27 seats</span></br>
                        </div>
                      </div>
                    </div>

                    <div class="col l4 m6 s12">
                      <div class="card-panel card-destination-vessel">
                        <a class="cover gray">
                          <img class="responsive-img" src="http://placehold.it/300x215" alt="Vessel Name : Number of Seats Left">
                          <span class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                            <i class="material-icons">star_border</i>
                          </span>
                        </a>
                        <div class="header">
                          <span class="title">Coral</span></br>
                          <span>Travels To: Rasdhoo, Ukulhas, Mathiveri, Male' &amp; Airport</span></br>
                          <span>Speed: 48.25 km/h</span></br>
                          <span>Capacity: 27 seats</span></br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="http://placehold.it/350x300" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Sun</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Sun</h3>
                  <span class="price">$9.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="http://placehold.it/350x280" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Big Bang 1</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Big Bang 1</h3>
                  <span class="price">$23.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="http://placehold.it/350x320" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Maze</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Maze</h3>
                  <span class="price">$11.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="http://placehold.it/350x260" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Ice</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Ice</h3>
                  <span class="price">$14.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="http://placehold.it/350x290" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Cave</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Cave</h3>
                  <span class="price">$4.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="http://placehold.it/350x240" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Grapefruit</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Grapefruit</h3>
                  <span class="price">$14.99</span>
                </div>

                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="http://placehold.it/350x300" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Big Bang 2</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Big Bang 2</h3>
                  <span class="price">$40.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="http://placehold.it/350x280" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Big Bang 3</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Big Bang 3</h3>
                  <span class="price">$18.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="http://placehold.it/350x250" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Circle</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Circle</h3>
                  <span class="price">$10.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="http://placehold.it/350x260" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Triangle</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Triangle</h3>
                  <span class="price">$10.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="http://placehold.it/350x300" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Hexagon</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Hexagon</h3>
                  <span class="price">$10.99</span>
                </div>
                <p class="description">Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#two!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#three!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#four!"><img src="http://placehold.it/300x200"></a>
                    <a class="carousel-item" href="#five!"><img src="http://placehold.it/300x200"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- /.container -->
@endsection

@section('body-extra')
@endsection