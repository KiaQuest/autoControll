<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Araba extends Model
{
    use HasFactory;
    protected $table = 'arabas';
    protected $guarded = ['id'];
}
