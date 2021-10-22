<?php
namespace App\Work\Video;

use App\Work\Interfaces\VideoSubjectInterface;

class YoutubeSubject extends AbsBase implements VideoSubjectInterface
{

    protected $src = "https://www.youtube.com/embed/";
    
    protected $link = [
        "https://youtu.be/",
        "https://www.youtube.com/watch?v=",
        "https://www.youtube.com/embed/"
    ];
 
    public function view($url)
    {
        return $this->generate($this->src,$this->link,$url);
    }
    
}