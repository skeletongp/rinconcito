<?php

namespace App\Models;

use App\Traits\OutcomesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Outcome extends Model
{
    use HasFactory, SoftDeletes, SearchableTrait, OutcomesTrait;

    protected $guarded=[];
    protected $searchable = [
        
        'columns' => [
            'name' => 10,
            'description' => 10,
            'type' => 10,
            
        ],
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
