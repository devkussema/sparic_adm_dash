<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\{
    User, Post
};

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timeline.timeline');
    }

    public function viewProfile($username)
    {
        $user = User::where('username', $username)->first();
        $posts = $user->posts()->latest()->get();
        return view('user.profile', compact('user', 'posts'));
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
        //
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
    public function post(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return response()->json(['message' => 'Imagens atualizadas com sucesso.'], 200);
    }
    public function uploadImg(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'img_capa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('img')) {
                $imgPath = Storage::disk('public')->putFile('profile_images', $request->file('img'));
                $user->img = $imgPath;
            }

            if ($request->hasFile('img_capa')) {
                $imgCapaPath = Storage::disk('public')->putFile('capa_images', $request->file('img_capa'));
                $user->img_capa = $imgCapaPath;
            }

            $user->save();

            return response()->json(['message' => 'Imagens atualizadas com sucesso.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar imagens: ' . $e->getMessage()], 500);
        }
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
