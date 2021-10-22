<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Work\FormatDate;
use Illuminate\Http\Request;
use App\Work\Authorization\ArticleAuthorization;

class WelcomeController extends Controller
{
     
     protected $auth;
     
     protected $format;

     public function __construct()
     {
        $this->auth = new ArticleAuthorization();
        $this->format = new FormatDate(); 
     }

     public function index()
     {
        $articles = Article::orderBy('created_at','desc')->where('visible',2)->paginate(10);

        $this->auth->authAll($articles); //authorized articles
        return view('welcome',['articles'=>$articles, 'format'=>$this->format]);   
     }

  
     public function show($title, $id)
     {
        $article = Article::where('title',$title)->where('id',$id)->where('visible',2)->first();

        $this->auth->authUnique($article); //authorized articles
        return view('article',['article'=>$article,'format'=>$this->format]);         
     }

     public function search(Request $request)
     {
         $articles = Article::where('title','like','%'.$request->search.'%')->where('visible',2)->paginate(10);

         $this->auth->authAll($articles); //authorized articles
         return view('welcome',['articles'=>$articles, 'format'=>$this->format]);
     }

}
