<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belumpunya extends Model
{
    use HasFactory;
    protected $table = 'belum_punya_aplikasi';
    protected $guarded = [];
    protected $primaryKey = 'id';
}
