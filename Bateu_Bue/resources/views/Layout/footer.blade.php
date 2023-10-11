<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="{{asset('assetes/images/bateu-bwelogo.png.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Links Úteis</h4>
                <ul>
                    <li><a href="{{route('pag_inicial')}}">Homepage</a></li>
                    <li><a href="{{route('pag_desporto')}}">Desporto</a></li>
                    <li><a href="{{route('pag_cultura')}}">Cultura</a></li>
                    <li><a href="{{route('pag_politica')}}">Política</a></li>
                    <li><a href="{{route('pag_noticias')}}">Notícias</a></li>
                    <li><a href="{{route('pag_contactos')}}">Contactos</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2023 LUA-DEIRA BUSSENES. All Rights Reserved.</p> 
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{route('pag_listar_africa')}}"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
