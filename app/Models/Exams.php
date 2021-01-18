<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Exams extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'exams';

    protected $fillable = [
        'title', 'time', 'forms', 'content',
    ];
}