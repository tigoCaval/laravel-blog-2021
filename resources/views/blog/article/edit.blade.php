@extends('layouts.app', ['activePage' => 'article', 'titlePage' => __('Artigo')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Atualizar Artigo</h4>
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

                <form method="Post" action="{{route('articles.update',$article->id)}}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                      <label for="inputTitle">Título</label>
                      <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Informe o título" value="{{$article->title}}">
                      @if($errors->has('title'))
                         <span id="title-error" class="error text-danger" for="input-title">{{$errors->first('title')}}</span>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="inputUrlImage">URL Imagem</label>
                      <input type="text" class="form-control" id="inputImage" name="url_image" placeholder="Copiar endereço da imagem" value="{{$article->url_image}}">
                      @if($errors->has('url_image'))
                         <span id="urlImage-error" class="error text-danger" for="input-urlImage">{{$errors->first('url_image')}}</span>
                      @endif 
                    </div>

                    <div class="form-group">
                      <label for="inputUrlVideo">URL Vídeo</label>
                      <input type="text" class="form-control" id="inputVideo" name="url_video" placeholder="Copiar endereço do vídeo (youtube)" value="{{$article->url_video}}">
                      @if($errors->has('url_video'))
                         <span id="urlVideo-error" class="error text-danger" for="input-urlVideo">{{$errors->first('url_video')}}</span>
                      @endif 
                    </div>

                    <div class="form-group">
                        <label for="inputAuthor">Autor</label>
                        <input type="text" class="form-control" id="inputAuthor" name="author" placeholder="Nome do autor" value="{{$article->author}}">
                        @if($errors->has('author'))
                           <span id="author-error" class="error text-danger" for="input-author">{{$errors->first('author')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="selectVisible">Visibilidade</label>
                        <select class="form-control" name="visible"> 
                            <option value="1" @if($article->visible === 1) selected @endif>Privado</option>
                            <option value="2" @if($article->visible === 2) selected @endif>Publico</option>
                        </select>
                        @if($errors->has('visible'))
                          <span id="visible-error" class="error text-danger" for="input-visible">{{$article->visible}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="inputDescription">Descrição</label>
                        <textarea class="form-control" name="description" id="inputDescription" cols="30" rows="10">{{$article->description}}</textarea>
                        @if($errors->has('description'))
                           <span id="description-error" class="error text-danger" for="input-description">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
    
            </div>
          </div>
         
        </div>
      </div>
     
    </div>
  </div>
@endsection