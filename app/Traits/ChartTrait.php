<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ChartTrait
{
    public function scopeActive(Builder $query, $status=true)
    {
        if ($status) {
            return $query->where('status','=','PENDIENTE');
        }
        $salud="hola";
        return $query->where('status','!=','PENDIENTE');
    }
}

