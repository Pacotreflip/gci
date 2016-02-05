@extends('front.template')
@section('main')

        <div class="container">
            <div class="center">
               <hr><h2 class="intro-text text-center">Galería</h2><hr>
               <p class="lead">descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
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
                                    <h3><a href="#">Título</a></h3>
                                    <p>Descripción</p>
                                    <a class="preview" href="{{ asset('images/portfolio/recent/8.jpg') }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Completa</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
@stop
