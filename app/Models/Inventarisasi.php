<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventarisasi extends Model
{
    use HasFactory;
    protected $table = 'inventarisasi';
    protected $guarded = [];
    protected $primaryKey = 'id';
}
