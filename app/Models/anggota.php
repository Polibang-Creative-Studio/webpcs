<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $table ='anggota';
    protected $primaryKey = 'No';
    protected $fillable = [
       
        'nama' ,
        'jabatan',
        'sosmed',
        'kata_kata',
        'gambar'
    ];
    protected $hidden;
}

