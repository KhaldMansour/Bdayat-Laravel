<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name' , 'email' , 'notifications_preferences'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
