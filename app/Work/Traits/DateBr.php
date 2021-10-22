<?php
namespace App\Work\Traits;

use DateTime;

trait DateBr
{
    
    /**
     * get brazilian date format.
     *
     * @param  mixed $data
     * @return void
     */
    public function formatBr($data)
    {
        $dateTime = new DateTime($data);
        return empty($data) ? false : $dateTime->format('d/m/Y');     
    }   
    
    
}