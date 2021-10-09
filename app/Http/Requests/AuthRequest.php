<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class AuthRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->request->add(['fullname' => $this->name . ' ' . $this->lastname]);
        $this->request->add(['slug' => Str::slug($this->fullname, '-')]);
       
        $this->photo?'':$this->request->add(['photo'=>'profile.png']);;
       
    }
    
    public function rules()
    {
        return [
            'fullname'=>'required|max:120',
            'name'=>'required|max:50',
            'lastname'=>'required|max:50',
            'password'=>'required|min:8|confirmed',
        ];
    }
}
