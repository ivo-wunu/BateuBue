@extends('Layout/manster')
@section('sessao')

<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>CONFORTO &</h4>
                            <span>Não ésite em nos visitar&amp;temos os melhores preços do mercado angolano.</span>
                            <div class="main-border-button">
                                <a href="#">Saber Mais</a>
                            </div>
                        </div>
                        <img src="{{asset('assetes/images/left-banner-image.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Nóticias</h4>
                                        <span>Iraque pede à Suécia extradição de iraquiano que profanou o Corão!</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Nóticias</h4>
                                            <p>Iraque pede à Suécia extradição de iraquiano que profanou o Corão.</p>
                                            <div class="main-border-button">
                                                <a href="#">Saber Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('assetes/images/iraque.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>África</h4>
                                        <span>Presidente de Moçambique pede investimento Vietnamita no país!</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>África</h4>
                                            <p>Presidente de Moçambique pede investimento Vietnamita no país.</p>
                                            <div class="main-border-button">
                                                <a href="#">Ver Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('assetes/images/Moçambique.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Cultura</h4>
                                        <span>Angola registra um elevado número de natalidade no primeiro semestre de 2023.</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Cultura</h4>
                                            <p>Angola registra um elevado número de natalidade no primeiro semestre de 2023.</p>
                                            <div class="main-border-button">
                                                <a href="#">Saber Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('assetes/images/baner-right-image-03.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Desporto</h4>
                                        <span>Ronaldo deixa a seleção e regressa à Arábia </span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Desporto</h4>
                                            <p>Ronaldo deixa a seleção e regressa à Arábia.</p>
                                            <div class="main-border-button">
                                                <a href="#">Saber Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('assetes/images/baner-right-image-03.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>África</h2>
                    <span>Golpe de Estado no Sudão.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/luanda.jpg">
                            </div>
                            <div class="down-content">
                                <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                                <span>Angola</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/rdc2.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h6>RD Congo. Transição ecológica, a que custo? Relatório expôe face oculta da extração de cobalto e cibre.</h6>
                                <span>RDC</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/cabo.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h6>Cabo verde e FAQ assinam programa para acabar com a insegurança alimentar.</h6>
                                <span>Cabo Verde</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/Marrocos.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Marroquinos disponibilizam-se para apoiar populações afectada.</h4>
                                <span>Marrocos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Nóticias Diárias</h2>
                    <span>Mantemos-te informado com os acontecimentos diários.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/iraque.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h6>Salwan Momika motivou uma vaga de indignações internacionais em junho, ao queimar e espezinhar o Corão em frente da maior mesquita de Estocolmo no primeiro dia do Aida al-Adha, a "Festa do sacrifício", celebrada pelos muçulmanos à escala global</h6>
                                <span>Iraque</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/russia.jpg">
                            </div>
                            <div class="down-content">
                                <h6>O presidente da Rússia, Vladimir Putin, está sob crescente pressão para adotar uma abordagem ainda mais radical na guerra da Ucrânia.</h6>
                                <span>Rússia</span>   
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/sic.jpg">
                            </div>
                            <div class="down-content">
                                <h6>A ilha italiana de Lampedusa recebeu, nesta terça-feira, um número recorde de desembarques, com mais de 2.800 migrantes a bordo de cerca 70 embarcações desde a meia-noite, ao mesmo tempo que a guarda-costeira resgatou 800 pessoas no Mediterrâneo.</h6>
                                <span>Itália</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/tuga.jpg">
                            </div>
                            <div class="down-content">
                                <h6>O Presidente da República recusou esta terça-feira que o Conselho de Estado esteja desprestigiado, depois das recentes críticas às fugas de informações daquele órgão, e defendeu que é "um termómetro do sentir da sociedade portuguesa".</h6>
                                <span>Portugal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Cultura</h2>
                    <span>........</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/delero2.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h6>Delero King diz que é possível viver da música em angola porque faz um milhão por semana.</h6>
                                <span>Música</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/delero2.jpg" alt="">
                            </div>
                            <div class="down-content">
                                <h6>Delero King diz que é possível viver da música em angola porque faz um milhão por semana.</h6>
                                <span>Música</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/delero2.jpg">
                            </div>
                            <div class="down-content">
                                <h6>Delero King diz que é possível viver da música em angola porque faz um milhão por semana.</h6>
                                <span>Música</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <img src="assets/images/delero2.jpg">
                            </div>
                            <div class="down-content">
                                <h6>Delero King diz que é possível viver da música em angola porque faz um milhão por semana.</h6>
                                <span>Música</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Democrácia em Angola</h2>
                    <span>O sistema político em Angola é presidencialista e multipartidário.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Os deputados da UNITA assinaram a petição que formula o processo de destituição de João Lourenço da Presidência de Angola. UNITA diz estarem "reunidas condições legais" para iniciar a destituição do chefe de Estado.</p>
                    </div>
                    <p>Está marcado o primeiro passo do processo do "impeachment" de João Lourenço, uma iniciativa do Grupo Parlamentar da UNITA, que segundo o seu presidente, Liberty Chiyaka, é uma resposta à solicitação do povo angolano.</p>
                    <p>Dos 90 deputados eleitos na lista da UNITA, 86 subscreveram a petição. Liberty Chiyaka garante que as ausências foram justificadas. O presidente do grupo parlamentar da União Nacional para a Independência Total de Angola (UNITA, maior partido na oposição), Liberty Chiyaka, foi o primeiro a subscrever a iniciativa, seguido dos quatro vice-presidentes do grupo parlamentar</p>
                    <div class="main-border-button">
                        <a href="products.html">Saber Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Lei das ONG</h4>
                                <span>Lei das ONG é "carta branca" contra vozes incómodas</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="assets/images/ong.webp">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="assets/images/unita.webp" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>MPLA</h4>
                                <span>O PARTIDO DA VERDADE, DA LIBERDADE E DO POVO.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection