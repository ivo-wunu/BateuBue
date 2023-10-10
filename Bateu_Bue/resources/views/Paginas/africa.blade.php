@extends('Layout/manster')
@section('sessao')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>África</h2>
                        <span>O berço da humanidade</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Notícias em destaque em África</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($ver_af as $itens)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="/assetes/images/{{$itens->imagem_afri}}">
                        </div>
                        <div class="down-content">
                            <h6>{{$itens->descricao_afri}}</h6>
                            <span><h5>{{$itens->titulo_afri}}</h5></span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
                            <span>Angola</span>
                        </div>
                    </div>
                </div>
            -->
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@endsection