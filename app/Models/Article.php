<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'url_image',
        'url_video',
        'description',
        'author',
        'visible',
        'created_at',
        'updated_at',
        'user_id'
    ];
    
    /**
     * Get validation visible [1 = private; 2 = public ].
     * Valid values ​​must be 1 or 2.
     * 
     * @param  mixed $value
     * @return void
     */
    public function validationVisible($value)
    {
        return $value <= 2 && $value > 0 ? true : false;
    }

}
