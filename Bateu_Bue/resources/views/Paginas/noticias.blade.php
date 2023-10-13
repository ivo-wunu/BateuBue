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
                        <h2>Notícias em Destaque</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($ver_not as $item)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <img src="/assetes/images/{{$item->imagem_not}}">
                        </div>
                        <div class="down-content">
                            <h6>{{$item->descricao_not}}</h6>
                            <span><h5>{{$item->titulo_not}}</h5></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
@endsection