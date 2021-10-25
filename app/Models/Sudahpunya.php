<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sudahpunya extends Model
{
    use HasFactory;
    protected $table = 'sudah_punya_aplikasi';
    protected $guarded = [];
    protected $primaryKey = 'id';
}
