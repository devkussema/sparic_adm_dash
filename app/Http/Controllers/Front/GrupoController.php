<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\{
    Grupo, Membro, RequestAddGroup, Notificacao
};

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupo.show', compact('grupos'));
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

    public function join(Request $request, $idUser, $idGrupo)
    {
        $membroAdm = Membro::where('grupo_id', $idGrupo)->where('cargo', 'Administrador')->first();
        
        $me = $idUser;
        $he = $membroAdm->user_id;
        $grupo = Grupo::where('id', $idGrupo)->first();

        $join = RequestAddGroup::create([
            'user_id' => $idUser,
            'grupo_id' => $idGrupo,
            'status' => false
        ]);

        $notify = Notificacao::create([
            'user_de' => $me,
            'user_para' => $he,
            'texto' => Auth::user()->name .' '. Auth::user()->last_name . " quer aderir ao teu grupo: " . $grupo->nome,
            'visto' => '0',
            'tipo' => '2'
        ]);

        return redirect()->back();
    }

    public function cancelarJoin(Request $request, $idUser, $idGrupo)
    {
        $requestAddGroup = RequestAddGroup::where([
            'user_id' => $idUser,
            'grupo_id' => $idGrupo,
            'status' => '0',
        ])->first();

        if ($requestAddGroup) {
            $requestAddGroup->delete();
            
            return redirect()->back();
        }else{ return redirect()->back(); }
    }

    public function sair(Request $request, $grupo_id)
    {
        $membro = Membro::where([
            'user_id' => Auth::id(),
            'grupo_id' => $grupo_id,
            'cargo' => 'Membro',
        ]) /* ->whereNotIn('cargo', ['Administrador']) ->where(function ($query) use ($grupo_id) {
                $query->where('cargo', '<>', 'Administrador')
                    ->where('grupo_id', $grupo_id)
                    ->whereNotExists(function ($subquery) use ($grupo_id) {
                        $subquery->select(DB::raw(1))
                                ->from('membros')
                                ->whereColumn('grupo_id', 'membros.grupo_id')
                                ->where('cargo', '<>', 'Administrador');
                    });
                })*/
            ->first();
        if ($membro) {
            $membro->delete();

            return redirect()->back();
        }else{ return redirect()->back()->with('error', 'É o único membro nesse grupo e além disso ês Administrador. Apenas elimina o grupo.'); }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => ['required', 'string', 'max:255'],
            'descricao' => ['nullable', 'string', 'max:255'],
            'privacidade' => ['required', 'string'],
            'site_url' => ['nullable', 'string', 'url'],
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'privacidade.required' => 'O campo privacidade é obrigatório.',
            'site_url.url' => 'Por favor, informe uma url válida.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('img') && $request->hasFile('img_capa') ) {
            $imgPerfil = $request->file('img');
            $imagemCapa = $request->file('img_capa');
            $nome = $request->input('nome');
            $descricao = $request->input('descricao');
            $privacidade = $request->input('privacidade');
            $site_url = $request->input('site_url');

            $imgPerfilPath = $imgPerfil->store('grupo/foto_perfil', 'public');
            $imagemPath = $imagemCapa->store('capa_images/grupo', 'public');

            $grupo = new Grupo();
            $grupo->nome = $nome;
            $grupo->descricao = $descricao;
            $grupo->img = $imgPerfilPath;
            $grupo->img_capa = $imagemPath;
            $grupo->privacidade = $privacidade;
            $grupo->site_url = $site_url;
            $grupo->save();

            $membro = new Membro();
            $membro->user_id = Auth::id();
            $membro->grupo_id = $grupo->id;
            $membro->cargo = "Administrador";
            $membro->save();

            if (request()->expectsJson()) {
                return response()->json(['message' => 'Grupo criado com sucesso'], 200);
            }
            return redirect()->back();
        }else{
            return redirect()->back()->with('error', 'Preencha todos os campos!')->withInput();
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
