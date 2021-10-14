<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    /* Relacionts */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    /* Customs */
    public function getDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y');
    }
    public function getNumAttribute()
    {
        $num=str_replace('Fct. ', 'Fct. #', $this->number);
        return $num;
    }
    public function fromToday()
    {
        $dt = Carbon::now();
        $today = $dt->toDateString();
        $fromDay = Invoice::whereDate('created_at', '=', $today);
        return $fromDay;
    }
}
