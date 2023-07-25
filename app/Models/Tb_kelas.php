<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_kelas extends Model
{
    use HasFactory;

    protected $table = 'tb_kelas';
    protected $fillable = [
        'nm_kelas'
    ];
}
