<?php

namespace App\Models;

use App\Traits\ChartTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chart extends Model
{
    use HasFactory, SoftDeletes, ChartTrait;
    protected $guarded=[];

    public function product()
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }
}
