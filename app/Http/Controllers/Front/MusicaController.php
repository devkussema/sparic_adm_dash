<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\{
    Post, User, Musica, MusicaInterprete
};

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = Auth::user()->username;
        if ($request->hasFile('arquivo') && $request->hasFile('img_capa') && $request->input('titulo') && $request->input('descricao')) {
            $audioFile = $request->file('arquivo');
            $imageFile = $request->file('img_capa');
            $titulo = $request->input('titulo');
            $descricao = $request->input('descricao');

            // Salvar os arquivos e obter seus caminhos
            $audioPath = $audioFile->store('musica/' . $username, 'public'); // Substitua pelo caminho desejado
            $imagePath = $imageFile->store('capa_images/musica', 'public'); // Substitua pelo caminho desejado

            // Criar a nova música no banco de dados
            $musica = new Musica();
            $musica->titulo = $titulo;
            $musica->descricao = $descricao;
            $musica->img_capa = $imagePath;
            $musica->arquivo = $audioPath;
            $musica->user_id = Auth::user()->id; // Ou outra lógica para obter o usuário atual
            $musica->save();

            // Adicionar lógica para associar os intérpretes, se necessário

            return response()->json(['message' => 'Música adicionada com sucesso'], 200);
        } else {
            return response()->json(['message' => 'Arquivos em falta'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
