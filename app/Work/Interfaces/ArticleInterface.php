<?php
namespace App\Work\Interfaces;

interface ArticleInterface
{
    public function createArticle(array $data);
    public function updateArticle($id, array $data);
    public function deleteArticle($id);
    public function model();
}