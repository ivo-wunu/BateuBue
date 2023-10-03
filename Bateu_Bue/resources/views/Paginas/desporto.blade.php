@extends('Layout/manster')
@section('sessao')
    
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Desporto</h2>
                        <span>Oficial, Palhinha &amp;renova com pelo Fulha após mudança falhada para o Bayern.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="{{asset('assetes/images/jorge.jpeg')}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>Jorge Jesus &amp; Oliver Kahn</h4>
                        <span>Jorge Jesus e Oliver Kahn juntos na Arábia Saudita? É possível.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>O antigo guardião alemão esteve na sede de treinos do Al Hilal, nesta quinta-feira..</p>
                        </div>
                        <p>Oliver Kahn esteve no quartel-general Al Hilal e recebeu uma camisola das mãos de Jorge Jesus. Assistiu ao treino da equipa principal de futebol, que se prepara para defrontar o Al Raed na sexta-feira, na sexta jornada da Liga saudita. Esteve também com Ibrahim Al-Jarbou, atual CEO do Al-Hilal.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Portugal</h2>
                        <span>Notícias em destaque no footbol Portugués.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{asset('assetes/images/uefa.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h4>UEFA</h4>
                            <span>Confunde estádio da Luz com o Emirates</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{asset('assetes/images/andeP.jpg')}}">
                        </div>
                        <div class="down-content">
                            <h4>Champions de Andebol</h4>
                            <span>FC Porto entra a ganhar Champions de andebol</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{asset('assetes/images/sporting.jpg')}}">
                        </div>
                        <div class="down-content">
                            <h4>Sporting FC</h4>
                            <span>A bola da a conhecer o futuro 11 do sporting.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Basquetebol Angolano</h4>
                        <p>Angola venceu, este domingo, a Selecção da Nigéria, por 65-59, disputa realizada no Pavilhão Multiusos do Kilamba, em Luanda, em jogo da quinta e última janela da FIBA.</p>
                        <img src="{{asset('assetes/images/basqut.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Andebol</h4>
                        <p>A Selecção Nacional júnior feminina de andebol qualificou-se, quarta-feira, para a final do 30º Campeonato Africano da modalidade, mercê do triunfo sobre a anfitriã Tunísia, por 28-22..</p>
                        <img src="{{asset('assetes/images/andebol.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Footbol</h4>
                        <p>O Conselho de Disciplina da Federação Angolana de Futebol negou, esta quinta-feira, o recurso com efeitos suspensivos interposto pelo Petro de Luanda.</p>
                        <img src="{{asset('assetes/images/petro2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>