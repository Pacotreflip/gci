@extends('front.template')
@section('main')
        <div class="container">
            <div class="center">
               <hr><h2 class="intro-text text-center">¿Quiénes Somos?</h2><hr>
               <p class="lead list-group-item">Una empresa joven en años, con personal altamente calificado <br> con una gran experiencia en la instalación de sistemas de aire para la industría.</p>
            </div>
            
            <div class="center">
               <hr><h2 class="intro-text text-center">Nuestra Misión</h2><hr>
               <p class="lead list-group-item">Ofrecer las mejores propuestas, proyecciones, ejecuciones y soluciones a nuestros clientes, acompañada de un excelente servicio y relación laboral, para así garantizar la mayor satisfacción a las necesidades de nuestros clientes.</p>
            </div>
            
            <div class="center">
               <hr><h2 class="intro-text text-center">Nuestra Visión</h2><hr>
               <p class="lead list-group-item">Realizar un crecimiento en todas nuestras áreas para brindar un mejor servicio mediante la actualización del desarrollo técnico y humano, y así, brindar una excelente calidad siendo una empresa totalmente responsable.</p>
            </div> 
            
            <div class="center">
               <hr><h2 class="intro-text text-center">Nuestros Valores</h2><hr>
            </div>
               <div class="col-sm-8" >
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">                                    
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Calidad Humana y Profesional</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Honestidad</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Atención</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Profesionalismo</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Lealtad de Servicio</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                {{ HTML::image('images/tab1.png','Tab1', array('class' => 'img-responsive')) }}
                                            </div>
                                            <div class="media-body">
                                                <h2>Calidad Humana y Profesional</h2>
                                                <p><h3>Descripcion de calidad humana y profesional...</h3></p>                                            
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade center" id="tab2">
                                         <h2></h2>
                                         <p></p>
                                     </div>

                                     <div class="tab-pane fade center" id="tab3">
                                        <h2></h2>
                                        <p></p>
                                     </div>
                                     
                                     <div class="tab-pane fade center" id="tab4">
                                       
                                         
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p></p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->
                
                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonios</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                {{ HTML::image('images/testimonials1.png', 'Testimonials', array('class' => 'img-responsive')) }}
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                {{ HTML::image('images/testimonials1.png', 'Testimonials', array('class' => 'img-responsive')) }}
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>
                
            </div> 
            
            
                

                

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

@stop