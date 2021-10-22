<?php
namespace App\Work\Video;

use App\Work\Interfaces\VideoSubjectInterface;

class VimeoSubject extends AbsBase implements VideoSubjectInterface
{
    protected $src = "https://player.vimeo.com/video/";
    
    protected $link = [
        "https://vimeo.com/",
        "https://player.vimeo.com/video/"
    ];

    public function view($url)
    {
        return $this->generate($this->src,$this->link,$url);
    }

}