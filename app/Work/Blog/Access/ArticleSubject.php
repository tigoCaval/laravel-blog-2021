<?php
namespace App\Work\Blog\Access;

use App\Models\Article;
use App\Work\Interfaces\ArticleInterface;

class ArticleSubject implements ArticleInterface
{
     
    public function createArticle(array $data)
    {
        $collection = [
            'user_id' => auth()->user()->id,
            'title' => $data['title'],
            'url_image' => $data['url_image'],
            'url_video' => $data['url_video'],
            'description' => $data['description'],
            'author'=> $data['author'],
            'visible' => $data['visible'],
         ];
         return $this->model()->create($collection); 
    }

    public function updateArticle($id, array $data)
    {
        if(auth()->user()->id == $this->model()->find($id)->user_id){
            $collection = [
                'user_id' => auth()->user()->id,
                'title' => $data['title'],
                'url_image' => $data['url_image'],
                'url_video' => $data['url_video'],
                'description' => $data['description'],
                'author'=> $data['author'],
                'visible' => $data['visible'],
            ]; 
            return $this->model()->find($id)->update($collection);
        }
        return false;
    }

    public function deleteArticle($id)
    {
        if(auth()->user()->id == $this->model()->find($id)->user_id){ 
            return $this->model()->find($id)->delete();
        } 
        return false;
    }

    public function model()
    {
        return new Article();
    }
}