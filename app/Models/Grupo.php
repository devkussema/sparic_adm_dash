<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'img',
        'img_capa',
        'privacidade',
        'site_url',
    ];

    public function membros()
    {
        return $this->hasMany(Membro::class);
    }
}
