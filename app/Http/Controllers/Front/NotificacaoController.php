<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notificacao;

class NotificacaoController extends Controller
{
    public function getNotificacoesUsuarioAtual(Request $request)
    {
        $user_id = auth()->user()->id;

        $notificacoes = Notificacao::where('user_para', $user_id)->get();

        return response()->json(['notificacoes' => $notificacoes]);
    }
}
