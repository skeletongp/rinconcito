<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getCostoAttribute(){
        $cost= '$'.number_format($this->cost, 2);
        return $cost;

    }
    public function getPictAttribute(){
       if (!$this->photo) {
          return "https://res.cloudinary.com/dboafhu31/image/upload/v1615693056/sample_image.jpg";
       }
       return $this->photo;

    }
}
