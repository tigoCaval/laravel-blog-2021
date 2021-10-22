<?php
namespace App\Work\Blog\Access;
 
use App\Work\Interfaces\AccessInterface;
use App\Work\Interfaces\ArticleInterface;

class ArticleAdapter implements AccessInterface 
{
    protected $article;
    
    public function __construct(ArticleInterface $article)
    {
       $this->article = $article;        
    } 

    public function create(array $data)
    {
       return $this->article->createArticle($data);
    }

    public function update($id, array $data)
    {
       return $this->article->updateArticle($id, $data); 
    }

    public function delete($id)
    {
       return $this->article->deleteArticle($id);
    }

    public function model()
    {
       return $this->article->model();
    }
}