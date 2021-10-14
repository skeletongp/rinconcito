<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded=[];

    public function getPhotoAttribute()
    {
        return 'https://ui-avatars.com/api/?name='.str_replace(' ','+',$this->name).'&color=FFFFFF&background=66D9D1';
    }

}
