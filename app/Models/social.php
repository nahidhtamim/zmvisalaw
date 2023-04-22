<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social extends Model
{
    use HasFactory;

    protected $table = 'socials';

    protected $fillable = [
        'fontawesome',
        'link',
        'status',
    ];
}
