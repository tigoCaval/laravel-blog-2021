@extends('layouts.app', ['activePage' => 'article', 'titlePage' => __('Artigo')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Excluir Artigo</h4>
            </div> 
            <div class="card-body">
              
              @if(session('status'))
                <div class="row">
                  <div class="col-sm-12">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                      <span>{{ session('status') }}</span>
                    </div>
                  </div>
                </div>
              @endif

                <form method="Post" action="{{route('articles.destroy',$article->id)}}">
                    @csrf
                    @method('delete')

                    <p>
                        <label for="">Id:</label> {{$article->id}} 
                    </p>
                    <p>
                        <label for="">Título:</label> {{$article->title}} 
                    </p>
                    <p>
                        <label for="">URL Imagem:</label> {{$article->url_image}} 
                    </p>
                    <p>
                      <label for="">URL Vídeo:</label> {{$article->url_video}} 
                    </p>
                    <p>
                        <label for="">Autor:</label> {{$article->author}} 
                    </p>
                    <p>
                        <label for="">Visibilidade:</label>
                        @if($article->visible === 1) Privado @endif
                        @if($article->visible === 2) Publico @endif
                    </p>
                    <p>
                        <label for="">Descrição:</label><br>
                         {{$article->description}} 
                    </p>
                   
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
    
            </div>
          </div>
         
        </div>
      </div>
     
    </div>
  </div>
@endsection