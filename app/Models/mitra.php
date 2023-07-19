<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mitra extends Model
{
    use HasFactory;

    protected $table ='mitra';
    protected $primaryKey = 'No';
    protected $fillable = [
       
        'nama',
        'gambar'
    ];
    protected $hidden;
}

   