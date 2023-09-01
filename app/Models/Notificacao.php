<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;
    protected $table = "notificacoes";

    public $fillable = [
        'user_de',
        'user_para',
        'texto',
        'visto',
        'tipo'
    ];

    public function usuario_de()
    {
        return $this->belongsTo(User::class, 'user_de');
    }

    public function de()
    {
        return "Kussema";
    }
}
