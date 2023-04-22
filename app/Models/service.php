<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'fontawesome',
        'image',
        'name',
        'description',
        'meta_tag',
        'status',
        'slug',
    ];
}
