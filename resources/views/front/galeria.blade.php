@extends('front.template')
@section('main')

        <div class="container">
            <div class="center">
               <hr><h2 class="intro-text text-center">Galería</h2><hr>
               <p class="lead">Algúnas de nuestras instalaciones.</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/1.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Sistema de Aire Acondicionado</a></h3>
                                    <p>Sistema de aire de presición para Site de Cómputo.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/1.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/2.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Pasillo Técnico</a></h3>
                                    <p>Unidades manejadoras de aire en galería técnica.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/2.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/3.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Unidad Manejadora de Aire</a></h3>
                                    <p>UMA tipo sanitario para areas limpias.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/3.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/4.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Red de ductería</a></h3>
                                    <p>Sistema de ductería tipo sanitario para areas limpias.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/4.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/5.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Unidades Condensadoras</a></h3>
                                    <p>Unidades condensadoras para equipos tipo Mini-Split y Fan & Coil para oficinas.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/5.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/6.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Unidad Manejadora de Aire</a></h3>
                                    <p>UMA Con perfiles de aluminio, paneles de lámina galvanizada y acabado sanitario</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/6.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/7.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Unidad Manejadora de Aire</a></h3>
                                    <p>UMA Tipo sanitario con perfil de acero galv. acabado en esmalte, para areas limpias.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/7.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/8.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Red de Ductería</a></h3>
                                    <p>Sistema de ductería en galaría técnica.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/8.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    
                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/9.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Fan & Coil</a></h3>
                                    <p>Instalación de Fan & Coil y ductería.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/9.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    
                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            {{ HTML::image('images/portfolio/recent/10.jpg','', array('class'=>'img-responsive')) }}
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Instalación de Ductería</a></h3>
                                    <p>Ductería para colección de polvos.</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/10.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
@stop
