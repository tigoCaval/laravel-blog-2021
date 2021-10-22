@extends('layouts.app', ['activePage' => 'article', 'titlePage' => __('Artigo')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Artigos Publicados</h4>
            </div> 
            <div class="card-body">
              <a  href="{{route('articles.create')}}" class="btn btn-primary">Cadastrar</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Visibilidade</th>
                    <th scope="col">Data cadastro</th>
                    <th scope="col">Data atualização</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($articles as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->title}}</td>
                      <td>
                        @if($item->visible === 1) Privado @endif
                        @if($item->visible === 2) Publico @endif
                      </td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td>
                        <a href="{{route('articles.edit',$item->id)}}">Editar</a> 
                        |
                        <a href="{{route('articles.show',$item->id)}}">Excluir</a>
                      </td> 
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $articles->links() }}
            </div>
          </div>
         
        </div>
      </div>
     
    </div>
  </div>
@endsection