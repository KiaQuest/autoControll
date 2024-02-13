<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ihtiac extends Model
{
    use HasFactory;

    protected $table = 'ihtiacs';
    protected $guarded = ['id'];
}
