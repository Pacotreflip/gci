@extends('front.template')
@section('main')
        <div class="container">
            <div class="center">
               <hr><h2 class="intro-text text-center">Acerca de Nosotros</h2><hr>
               <p class="lead">descripción</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">¿Quienes Somos?</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Misión</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Visión</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Valores</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Nuestra Filosofía   </a></li>
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
                                                <h2>¿Quiénes Somos?</h2>
                                                <p><h3>Una empresa joven, con personal altamente calificado y con una gran 
                                                    experiencia en la instalación de sistemas de aire para la industría.</h3></p>                                            
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade center" id="tab2">
                                         <h2>Misión</h2>
                                         <p>Ofrecer las mejores propuestas, proyecciones, ejecuciones y soluciones a nuestros clientes, acompañada de un excelente servicio y relación laboral, para así garantizar la mayor satisfacción a las necesidades de nuestros clientes.</p>
                                     </div>

                                     <div class="tab-pane fade center" id="tab3">
                                        <h2>Visión</h2>
                                        <p>Realizar un crecimiento en todas nuestras áreas para brindar un mejor servicio mediante la actualización del desarrollo técnico y humano, y así, brindar una excelente calidad siendo una empresa totalmente responsable.
</p>
                                     </div>
                                     
                                     <div class="tab-pane fade center" id="tab4">
                                         <h2>Valores</h2>
                                         <p>Calidad Humana y Profesional</p>
                                         <p>Honestidad</p>
                                         <p>Atención</p>
                                         <p>Profesionalismo</p>
                                         <p>Lealtad de Servicio</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

@stop