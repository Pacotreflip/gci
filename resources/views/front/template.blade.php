<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>GC Ingeniería</title>
    
        <!-- core CSS -->
        
        <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
        
        {!! HTML::style('css/animate.min.css') !!}
        {!! HTML::style('css/bootstrap.min.css') !!}
        {!! HTML::style('css/font-awesome.min.css') !!}
        {!! HTML::style('css/font-awesome.css') !!}
        {!! HTML::style('css/main.css') !!}       
        {!! HTML::style('css/prettyPhoto.css') !!}
        {!! HTML::style('css/responsive.css') !!}
        
        @yield('head')

        {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
	{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
    </head><!--/head-->
    
    <body class="homepage">
        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-4">
                            <div class="top-number"><p><i class="fa fa-phone"></i>      (55)36-89-41-70</p></div>
                        </div>
                        
                        <div class="col-sm-6 col-xs-8">
                            <div class="social">
                                <ul class="social-share">
                                    <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="mailto:correo@correo.com"><i class="fa fa-envelope "></i></a></li>
                                    
                                    @if(session('statut') != 'admin')
                                    <li><a href="{{URL::to('auth/login')}}"><i class="fa fa-sign-in"></i></a></li>
                                    @else
                                    <li><a href="{{URL::to('auth/logout')}}"><i class="fa fa-sign-out"></i></a></li>
                                    @endif
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{URL::to('/')}}">{{ HTML::image('images/logo.png') }}</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Navegación</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>    
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li {!! classActivePath('/') !!}> {!! link_to('/','Inicio' ) !!} </li>
                            <li {!! classActivePath('acerca') !!}> {!! link_to('acerca', 'Acerca de Nosotros') !!} </li>
                            <li {!! classActivePath('servicios') !!}> {!! link_to('servicios', 'Servicios') !!} </li>
                            <li {!! classActivePath('galeria') !!}> {!! link_to('galeria', 'Galería') !!} </li>
                            <li {!! classActivePath('contact/create') !!}> {!! link_to('contact/create', 'Contacto') !!} </li>			
                            
                            @if(session('statut') == 'admin')
                            <li> {!! link_to_route('admin', 'Panel de Administrador') !!} </li>
                            @endif   
                        
                        </ul>
                    </div>
                </div><!--/.container-->    
            </nav><!--/nav-->
            @if(session()->has('ok'))
        @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif	
        @if(isset($info))
        @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif            
        @yield('header')
        
        </header><!--/header-->
        @yield('main')
        
        <section id="conatcat-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="pull-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h2>¿Tienes preguntas o necesitas información?</h2>
                                <p>Llámanos (55)36-89-41-70</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->    
        </section><!--/#conatcat-info-->
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <p class="text-center">&copy; 2016 <b>GC Ingeniería en Aire S.A. de C.V.</b> Todos los derechos reservados.</p>
                    <p class="text-center">Calle Tonatico No. 287 Colonia Las Fuentes Municipio Nezahualcóyotl Estado de México C.P. 57600</p>
                </div>
            </div>
        </footer><!--/#footer-->
        
        {!! HTML::script('js/jquery.js') !!}
        {!! HTML::script('js/bootstrap.min.js') !!}
        {!! HTML::script('js/jquery.prettyPhoto.js') !!}
        {!! HTML::script('js/jquery.isotope.min.js') !!}
        {!! HTML::script('js/main.js') !!}
        {!! HTML::script('js/wow.min.js') !!}       
            
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        
        {!! HTML::script('js/plugins.js') !!}
        
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
        
	@yield('scripts')
    </body>
</html>