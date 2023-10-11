@extends('Layout/manster')
@section('sessao')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Notícias</h2>
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{asset('assetes/images/luanda2.jpeg')}}">
                        </div>
                        <div class="down-content">
                            <h6>Subida de Preços em Angola acelera em agosto e colocou inflação homóloga nos 13,54%.</h6>
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
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@endsection