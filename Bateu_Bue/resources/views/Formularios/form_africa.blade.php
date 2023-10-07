@extends('Post/manster_admin')
@section('materia')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>África</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario Para Conteudo Africano</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('pag_cadastro_africa')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleTitle">Titulo</label>
                    <input type="text" class="form-control" id="titulo_afri" name="titulo_afri" placeholder="Titulo" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Imagem</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagem_afri" id="imagem_afri">
                        <label class="custom-file-label" for="exampleInputFile">Imagem</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" rows="3" name="descricao_afri" id="descricao_afri" placeholder="desscrição ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Conteudo</label>
                        <textarea class="form-control" rows="3" name="conteudo_afri" id="conteudo_afri" placeholder="conteudo ..."></textarea>
                      </div>
                    </div>
                  </div>
                  {{session('msg')}}
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submeter</button>
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