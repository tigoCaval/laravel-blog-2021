<?php
namespace App\Work\Blog\Access;

use App\Work\Blog\Access\ArticleAdapter;
use App\Work\Blog\Access\ArticleSubject;

class ArticleAccess
{

    protected $adapter;

    public function __construct()
    {
        $this->adapter = new ArticleAdapter(new ArticleSubject());
    }
    
    public function create(array $data)
    {
        return $this->adapter->create($data);
    }

    public function update($id, array $data)
    {
        return $this->adapter->update($id, $data);
    }

    public function delete($id)
    {
       return $this->adapter->delete($id); 
    }

    public function model()
    {
       return $this->adapter->model();
    }
}    