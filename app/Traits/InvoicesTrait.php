<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait InvoicesTrait
{
    public function scopeTanda(Builder $query, $tanda = null)
    {
        
        switch ($tanda) {
            case 'mañana':
                return $query->whereTime('created_at', '<=', Carbon::parse('12:00'));
                break;
            case 'tarde':
                return $query->whereTime('created_at','>', Carbon::parse('12:00'))->whereTime('created_at','<=', Carbon::parse('18:00'));
                break;
            case 'noche':
                return $query->whereTime('created_at', '>', Carbon::parse('18:00'));
                break;
            default:
                return $query;
                break;
        }
    }
}
