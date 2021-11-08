<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PictureInventarisasi extends Model
{
    use HasFactory;

    protected $table = 'pictureinventarisasi';
    protected $guarded = [];
    protected $primaryKey = 'id';
}
