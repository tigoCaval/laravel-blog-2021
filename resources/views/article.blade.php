@extends('layouts.app-public')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
      
        <div class="col-lg-4 col-md-4">
            <h1 class="text-black text-center">{{$article->title}}</h1>
            <div class="text-center">
                <span>{{$format->formatBr($article->created_at)}}</span>
            </div>
            @empty(!$article->url_image)
                <div class="text-center">
                    <img class="img-fluid" src="{{$article->url_image}}" class="rounded" alt="...">
                </div> 
                <br>   
            @endempty
            
            @empty(!$article->url_video)
                <div class="text-center">
                    <iframe width="560" height="315" src="{{$article->url_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>    
                </div>
                <br>
            @endempty
            
            <p>
                {{$article->description}}
            </p>
           
        </div>
            
    </div> 
</div>
@endsection