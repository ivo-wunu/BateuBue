@extends('Post/manster_admin')
@section('materia')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Notícia</h1>
            </div>
          </div>
        </div>
      </section>
  
      <section class="content">
  
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Conteudos Sobre Notícia</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            Cod
                        </th>
                        <th style="width: 20%">
                            Titulo
                        </th>
                        <th style="width: 30%">
                            Imagem
                        </th>
                        <th>
                            Conteudo
                        </th>
                        <th style="width: 8%" class="text-center">
                            Descrição
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dado as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td>
                            <a>{{$item->titulo_not}}</a>
                            <br/>
                            <small>
                                {{$item->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="" class="table-avatar" src="../../assetes/images/{{$item->imagem_not}}">
                                    {{$item->imagem_not}}
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <small>
                                {{$item->conteudo_not}}
                            </small>
                        </td>
                        <td class="project-state">
                            {{$item->descricao_not}}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{route('edit_not',$item->id)}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form action="/delete_noticia/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
  
      </section>
  
@endsection