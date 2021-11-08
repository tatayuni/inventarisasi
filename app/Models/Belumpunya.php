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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            if($query->no == ''){

                $query->no = gen_no_tiket_belum_punya();

            }
        });
    }
}
