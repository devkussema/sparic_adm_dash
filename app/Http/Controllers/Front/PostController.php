<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\{
    Post, User
};

class PostController extends Controller
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

    public function post(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $post = new Post();

            $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('img')) {
                $imgPath = Storage::disk('public')->putFile('post_images', $request->file('img'));
                //$user->img = $imgPath;
                $post->img = $imgPath;
            }

            /*if ($request->hasFile('img_capa')) {
                $imgCapaPath = Storage::disk('public')->putFile('capa_images', $request->file('img_capa'));
                $user->img_capa = $imgCapaPath;
            }*/

            $post->user_id = $id;
            $post->save();

            return response()->json(['message' => 'Imagens publicada com sucesso.'], 200);
            //return back()->with('sucess', '');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao publicar imagem: ' . $e->getMessage()], 500);
        }
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
            'post_text' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Post::create([
            'post_text' => $request->post_text,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('home')->with('success', 'Post criado com sucesso!');
    }

    public function postAudio(Request $request)
    {
        if ($request->hasFile('audio') && $request->hasFile('image')) {
            $audioFile = $request->file('audio');
            #$imageFile = $request->file('image');

            // Lógica para salvar os arquivos, por exemplo:
            //$audioPath = $audioFile->store('audio', 'public');
            $audioPath = Storage::disk('public')->putFile('audio', $request->file('audio'));
            #$imagePath = $imageFile->store('images', 'public');

            // Lógica para salvar os dados no banco de dados, por exemplo:
            Post::create([
                'audio' => $audioPath,
                'user_id' => Auth::user()->id
            //     'image_path' => $imagePath,
            ]);

            return response()->json(['message' => 'Upload successful'], 200);
        } else {
            return response()->json(['message' => 'Missing files'], 400);
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
