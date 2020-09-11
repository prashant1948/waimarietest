<?php

namespace App\Http\Requests;


use App\Models\Brand;
use Illuminate\Foundation\Http\FormRequest;

class StoreBrand extends FormRequest
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
             'title'   => 'required|max:200',
             'image'   => 'image|max:2048',
         ];
     }

         public function data()
         {
             $data = [
                 'title'            => $this->get('title'),
                 'meta_description' => $this->get('meta_description'),
                 'is_featured'      => $this->get('is_featured')? $this->get('is_featured') : 0,
                 'is_published'     => $this->has('publish')
             ];

             return $data;
         }
}