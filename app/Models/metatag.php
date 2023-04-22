<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metatag extends Model
{
    use HasFactory;

    protected $table = 'metatags';

    protected $fillable = [
        'page_name',
        'meta_tag',
    ];
}

