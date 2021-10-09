<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->request->add(['fullname'=>$this->name.' '.$this->lastname]);
    }
    
    public function rules()
    {
        return [
            //
        ];
    }
}
