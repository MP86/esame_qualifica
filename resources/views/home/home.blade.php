@extends('master')


@section('content')

	<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
					
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="../img/slide1.jpg" title="torneo/sfide volley università" alt="torneo/sfide volley università">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/slide2.jpg" title="torneo/sfide basket università" alt="torneo/sfide basket università">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/slide3.jpg" title="torneo/sfide calcetto università" alt="torneo/sfide calcetto università">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/slide4.jpg" title="sala pesi" alt="sala pesi">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/slide5.jpg" title="sala corsi" alt="sala corsi">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
						<br> <small> o </small> <br>
						<small>Benvenuti in</small>
                    </h2>
                    <h1 class="brand-name">Gym-University</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Matteo Pretolani</strong>
                        </small>
                    </h2>
                    <hr class="tagline-divider">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    Sconto per 
                        <strong>Universitari!</strong>
                    </h2>
                    <hr>
                    
                    <hr class="visible-xs">
                    <p>
                    Per te che sei studente sconto xx%, con possibili iscrizioni a tornei/sfide tra università. <br>
                    </p>
                    
                    <hr class="tagline-divider">
                    
                    <div class="intro-text text-center">
                    
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                    <div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
			        </div>
			     </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contatto
                        <strong>dove siamo!</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.8764772312234!2d12.177751315355561!3d44.04460697910981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132c98a6b10f49ef%3A0x16c13e2b2ff965b9!2sVia+Nilde+Iotti%2C+69%2C+47025+Mercato+Saraceno+FC!5e0!3m2!1sit!2sit!4v1458518955564"
                    width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>
                </div>
                
                <div class="col-md-4">
                	<p>Nome:
                        <strong>Matteo</strong>
                    </p>
                    <p>Telefono:
                        <strong>3405628426</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:matteopretolani86@gmail.com">matteopretolani86@gmail.com</a></strong>
                    </p>
                    <p>Indirizzo:
                        <strong>Via Nilde Iotti N°69
                            <br>Bora (Mercato Saraceno), FC 47025</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    
@stop

