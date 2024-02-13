<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarla extends Model
{
    use HasFactory;
    protected $table = 'tarlas';
    protected $guarded = ['id'];
}
