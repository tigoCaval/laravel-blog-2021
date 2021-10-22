<?php
namespace App\Work\Authorization;

/**
 * Authorized articles.
 */
class ArticleAuthorization
{
      
    /**
     * Make sure the article listings are public [1 => private, 2 => public].
     *
     * @param  mixed $article
     * @return void
     */
    public function authAll($article)
    {
        foreach($article as $item){
            if($item->visible === 1)
               return exit("You are not allowed to view the articles.");                 
        }
        return true;
    }
    
    /**
     * Make sure the article is public [1 => private, 2 => public].
     *
     * @param  mixed $article
     * @return void
     */
    public function authUnique($article)
    {
       if(isset($article->visible))  
          return $article->visible === 1 ? exit("You are not allowed to view the articles.") : true;
       exit("You are not allowed to view the articles."); 
    }

}