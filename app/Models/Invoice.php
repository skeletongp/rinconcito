<?php

namespace App\Models;

use App\Traits\BalanceTrait;
use App\Traits\InvoicesTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Invoice extends Model
{
    use HasFactory, SoftDeletes, SearchableTrait, InvoicesTrait, BalanceTrait;
    protected $guarded=[];
   
    protected $searchable = [
        
        'columns' => [
            'invoices.number' => 10,
            'invoices.day' => 10,
            'users.fullname' => 10,
            
        ],
        'joins' => [
            'users' => ['users.id','invoices.user_id'],
        ],
    ];
    
    /* Relacionts */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    /* Customs */
    
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
