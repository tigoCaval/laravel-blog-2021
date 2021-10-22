<?php
namespace App\Work\Video;

use App\Work\Interfaces\VideoInterface;
use App\Work\Interfaces\VideoSubjectInterface;

class VideoAdapter implements VideoInterface
{

    protected $vs;
         
    public function __construct(VideoSubjectInterface $vs)
    {
       $this->vs = $vs;
    }

    public function youtube($url)
    {
       return $this->vs->view($url);
    }

    public function vimeo($url)
    {
       return $this->vs->view($url);
    }
    
}