<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class ChartRequest extends FormRequest
{
   public $stock;

   public function prepareForValidation()
   {
       $product=Product::find($this->product_id);
       $this->stock=$product->stock;
   }
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
           'cant'=>'required|min:1|lte:'.$this->stock,
        ];
    }
}
