<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait OutcomesTrait
{
    public function scopeType(Builder $query, $type = null)
    {
        if (!$type) {
           return $query;
        }
        return $query->where('type','=', $type);
    }
    public function scopeDay(Builder $query, $day = null)
    {
        if (!$day) {
           return $query;
        }
        return $query->where('day','=', $day);
    }
}
