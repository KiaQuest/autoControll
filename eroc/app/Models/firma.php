<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class firma extends Model
{
    use HasFactory;
    protected $table = 'firmas';
    protected $guarded = ['id'];
}
