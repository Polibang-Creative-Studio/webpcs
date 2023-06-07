<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;

    protected $table ='activity';
    protected $fillable = [
        'Title',
        'Heading',
        'Description',
        'Picture'
    ];
    protected $hidden;
}
