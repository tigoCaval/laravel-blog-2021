<?php

namespace App\Http\Requests;

use App\Rules\ArticleVisibleCheckRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'author'=>'required',
            'visible'=>['required',new ArticleVisibleCheckRule],
            'description'=>'required',
        ];
    }
}
