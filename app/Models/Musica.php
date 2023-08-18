<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descricao',
        'img_capa',
        'user_id',
        'arquivo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function interpretes()
    {
        return $this->belongsToMany(User::class, 'musica_interpretes', 'musica_id', 'interprete_id');
    }
}
