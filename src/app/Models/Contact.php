<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'last-name', 'first-name', 'gender',
        'email', 'tel-1', 'tel-2', 'tel-3',
        'address', 'building', 'categories', 'detail'
    ];
}
