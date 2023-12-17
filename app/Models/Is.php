<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Is extends Model
{
    use HasFactory;
    protected $table = 'is';
    protected $guarded = ['id'];

}
