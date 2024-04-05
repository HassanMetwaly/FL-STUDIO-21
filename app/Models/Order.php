<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'mobile',
        'email',
        'user_id',
    ];
}
