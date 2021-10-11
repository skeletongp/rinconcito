<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Product extends Model
{
    use HasFactory, SearchableTrait;
    protected $searchable = [
       
        'columns' => [
            'products.code' => 10,
            'products.name' => 10,
            'products.photo' => 2,
       
        ],
    ];
    protected $guarded=[];

    public function getCostoAttribute(){
        $cost= '$'.number_format($this->cost, 2);
        return $cost;

    }
    public function getPrecioAttribute(){
        $price= '$'.number_format($this->price, 2);
        return $price;

    }
    public function getPictAttribute(){
       if (!$this->photo) {
          return "https://res.cloudinary.com/dboafhu31/image/upload/v1615693056/sample_image.jpg";
       }
       return $this->photo;
    }
    public function chart()
    {
        return $this->hasOne(Chart::class);
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_products')->withPivot('cant');
    }
    public function hasStock()
    {
        if ($this->type=='COMIDA') {
            if ($this->ingredients->count()) {
               foreach ($this->ingredients as $ing) {
                   if (!$ing->stock) {
                       return 0;
                   }
               }
            } else {
                return 0;
            }
            return 10;
        } else {
            return $this->stock;
        }
        
    }
}
