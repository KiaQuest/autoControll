<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sikayet extends Model
{
    use HasFactory;
    protected $table = 'sikayets';
    protected $guarded = ['id'];
}
