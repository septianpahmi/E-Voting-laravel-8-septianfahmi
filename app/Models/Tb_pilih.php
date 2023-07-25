<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tb_pilih extends Model
{
    use HasFactory;

    protected $table = 'tb_pilihs';
    protected $fillable = [
        'id_user',
        'id_calon'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function tb_kandidat(){
        return $this->belongsTo(Tb_kandidat::class);
    }
}
