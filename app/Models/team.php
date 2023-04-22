<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'image',
        'name',
        'occupation',
        'email',
        'description',
        'status',
    ];
}
