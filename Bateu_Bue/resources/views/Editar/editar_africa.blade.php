@extends('Post/manster_admin')
@section('materia')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>África</h1>
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
                <h3 class="card-title">Editando... ...</h3>
              </div>

              <form action="/Editar/update{{$afri->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <!--@-foreach ($dado as $item)-->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleTitle">Titulo</label>
                    <input type="text" class="form-control" id="titulo_afri" name="titulo_afri" placeholder="Titulo" required value="{{$afri->titulo_afri}}">
                    <!--<input type="text" class="form-control" id="titulo_afri" name="titulo_afri" placeholder="Titulo" required value="{-{$getById->titulo_afri}}">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Imagem</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagem_afri" id="imagem_afri">
                        <label class="custom-file-label" for="exampleInputFile">Imagem</label>
                        <img src="/assetes/images/{{$afri->imagem_afri}}" alt="" class="img-preview"/>
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
                        <textarea class="form-control" rows="3" name="descricao_afri" id="descricao_afri" placeholder="descrição ..." velue="{{$afri->descricao_afri}}">
                        <!--<textarea class="form-control" rows="3" name="descricao_afri" id="descricao_afri" placeholder="desscrição ..." velue="{-{$getById->descricao_afri}}"></textarea>-->
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Conteudo</label>
                        <textarea class="form-control" rows="3" name="conteudo_afri" id="descricao_afri" placeholder="conteudo ..." velue="{{$afri->conteudo_afri}}">
                        <!--<textarea class="form-control" rows="3" name="conteudo_afri" id="conteudo_afri" placeholder="conteudo ..." velue="{-{$getById->conteudo_afri}}"></textarea>-->
                      </div>
                    </div>
                  </div>
                  {{session('msg')}}
                </div>
                <!--@-endforeach
                -- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

@endsection