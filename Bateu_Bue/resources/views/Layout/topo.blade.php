<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('pag_inicial')}}" class="logo">
                       <p class="blogo">BATEU-BWÉ</p> 
                        <p>PORTAL DE INFORMAÇÃO</p>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{route('pag_inicial')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#men">África</a></li>
                        <li class="scroll-to-section"><a href="#women">Nóticias</a></li>
                        <li class="scroll-to-section"><a href="#kids">Cultura</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Páginas</a>
                            <ul>
                                <li><a href="{{route('pag_desporto')}}">Desporto</a></li>
                                <li><a href="{{route('pag_africa')}}">África</a></li>
                                <li><a href="{{route('pag_noticias')}}">Notícias</a></li>
                                <li><a href="{{route('pag_politica')}}">Política</a></li>
                            </ul>
                        </li>
                        
                        <li class="scroll-to-section"><a href="{{route('pag_contactos')}}">Contacte-nos</a></li>
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>