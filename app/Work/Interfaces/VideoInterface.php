<?php
namespace App\Work\Interfaces;

interface VideoInterface
{
    public function youtube($url);
    public function vimeo($url);
}