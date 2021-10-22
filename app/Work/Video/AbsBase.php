<?php
namespace App\Work\Video;

abstract class AbsBase
{

    public function generate($src,$link,$url)
    {
        $value = $this->getId($link,$url);
        $src .= $value;
        $url = $src;
        return $url;
    }


    protected function getId($link,$url)
    {
        $value = "";
        $array = str_split($url);
        foreach($array as $key=>$item){
            $value .= $item;
            foreach($link as $key=>$item2){
                 if($value == $item2){
                     $value = "";
                 }
            }   
        }
        return $value;
    }


}