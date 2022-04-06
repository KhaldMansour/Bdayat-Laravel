<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'amount' , 'phone' , 'client_id' , 'due_date'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
