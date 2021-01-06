<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;


class StoreScholarshipList extends FormRequest
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
          'title'=>'required'
        ];
    }

    public function data()
    {
      $data = [
          'title'                 => $this->get('title'),
          'scholarship_type'      => $this->get('scholarship_type'),
          'is_published'          => $this->get('is_published') ? $this->get('is_published'): 0,
          'is_featured'           => $this->get('is_featured') ? $this->get('is_featured'): 0
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }
}
