@extends('Post/manster_admin')
@section('materia')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notícias</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario Para Editar Noticias</h3>
              </div>
              <form action="/Editar/update{{$not->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleTitle">Titulo</label>
                    <input type="text" class="form-control" id="titulo_not" name="titulo_not" placeholder="Titulo" required value="{{$not->titulo_not}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Imagem</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagem_not" id="imagem_not">
                        <label class="custom-file-label" for="exampleInputFile">Imagem</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" rows="3" name="descricao_not" id="descricao_not" placeholder="desscrição ..." value="{{$not->descricao_not}}"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Conteudo</label>
                        <textarea class="form-control" rows="3" name="conteudo_not" id="conteudo_not" placeholder="conteudo ..." value="{{$not->conteudo_not}}"></textarea>
                      </div>
                    </div>
                  </div>
                  {{session('msg')}}
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

@endsection