@extends('Post/manster_form')
@section('conteudo')
<div class="contact-us">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90186.37207676383!2d-80.13495239500924!3d25.9317678710111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ad1877e4a82d%3A0xa891714787d1fb5e!2sPier%20Park!5e1!3m2!1sen!2sth!4v1637512439384!5m2!1sen!2sth" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->
                
              </div>
          </div>
          <div class="col-lg-6">
              <div class="section-heading">
                  <h2>Formulario Para Conteudo Africano</h2>
                  <!--<span>Details to details is what makes Hexashop different from the other themes.</span>-->
              </div>
              <form id="contact" action="{{route('pag_cadastro_africa')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input name="titulo_afri" type="text" id="titulo_afri" placeholder="Titulo"required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input name="descricao_afri" type="text" id="descricao_afri" placeholder="Coloque Descrição" required>
                      </fieldset>
                    </div><br><br><br>
                    <div class="col-lg-6">
                      <fieldset>
                        <input name="imagem_afri" type="file" id="imagem_afri" required>
                      </fieldset>
                    </div>

                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="conteudo_afri" rows="6" id="conteudo_afri" placeholder="Esvreva aqui o conteudo!" required>
                        </textarea>
                      </fieldset>
                    </div>
                    {{session('msg')}}
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                    </div>
                  </div>
                </form>
          </div>
      </div>
  </div>
</div>
@endsection