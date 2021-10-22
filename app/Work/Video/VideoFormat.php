<?php
namespace App\Work\Video;

class VideoFormat
{   
   /**
    * youtube
    *
    */
   private $youtube;
      
   /**
    * vimeo
    *
    */
   private $vimeo;

   public function __construct()
   {
      $this->youtube = new VideoAdapter(new YoutubeSubject());
      $this->vimeo = new VideoAdapter(new VimeoSubject());    
   }
   
   /**
    * Get format from youtube.
    *
    * @param  string $url
    * @return string|false
    */
   public function youtube($url)
   {
      return $url ? $this->youtube->youtube($url) : false;
   }
    
   /**
    * Get format from vimeo.
    *
    * @param  string $url
    * @return string|false
    */
   public function vimeo($url)
   {
      return $url ? $this->vimeo->vimeo($url) : false; 
   }

}