@extends('layouts.app-public')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        @foreach ($articles as $item)
        <div class="col-lg-4 col-md-4">
            <h1 class="text-black text-center">{{$item->title}}</h1>
            <div class="text-center">
                 <span>{{$format->formatBr($item->created_at)}}</span>
            </div>
            <a href="{{route('article.public',[$item->title,$item->id])}}">
                
                @if($item->url_image)
                    <div class="text-center">
                        <img class="img-fluid" src="{{$item->url_image}}" class="rounded" alt="...">
                    </div>     
                @else
                    <div class="text-center">
                     {{$item->title}}
                    </div>
                @endif
            
                
            </a>
           
        </div>
        @endforeach
            
    </div>
    {{ $articles->links() }} 
</div>
@endsection