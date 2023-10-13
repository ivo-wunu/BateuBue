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

    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>DESPORTO</h2>
                        <span>Notícias em destaque no footbol mundial.</span>
                    </div>
                </div>
                @foreach ($ver_desp as $item)
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="/assetes/images/{{$item->imagem_des}}">
                        </div>
                        <div class="down-content">
                            <h4>{{$item->descricao_des}}</h4>
                            <span><h6>{{$item->titulo_des}}</h6></span>
                        </div>
                    </div>
                </div>
                @endforeach
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
                @foreach ($ver_desp as $item)
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>{{$item->titulo_des}}</h4>
                        <p>{{$item->conteudo_des}}</p>
                        <img src="/assetes/images/{{$item->imagem_des}}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>