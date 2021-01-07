<?php

namespace App\Http\Controllers;

use App\Models\Imagelinks;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $posts = DB::table('posts')->select('*')->orderBy('id', 'desc')->paginate(10);

        return view('poststable', ['posts' => $posts]);
    }

    public function postagens()
    {
        $imagelinks = DB::table('imagelinks')->select('*')->orderByDesc('posts.id')->leftJoin('posts', 'imagelinks.postId', '=', 'posts.id')->where('imagelinks.imageIndex', 0)->paginate(6);


        return view('postagens', ['imagelinks' => $imagelinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('createposts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {

        try {

            $post = new Post();
            $post->postName = $request->postName;
            $post->postCaption = $request->postCaption;
            $post->postDate = $request->postDate;
            $post->youtube = $request->youtube;
            $post->extraData = $request->extraData;
            $post->save();

            $response = 'Cadastrado com sucesso. Nome: ' . $request->postName;
        } catch (\Exception $e) {
            $response = 'Erro ao cadastrar. Nome: ' . $request->postName;
        }

        return redirect('posts')->with('response', $response);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show(int $id)
    {

//        $imagelinks = DB::table('imagelinks')->select('*')->where('postId', $id)->leftJoin('posts', 'imagelinks.postId', '=', 'posts.id')->get();
        $extralinks = DB::table('extralinks')->select('*')->where('postId', $id)->get();
        $post = Post::find($id);
        $imagelinks = $post->imagelinks;
        return view('postDetail', [
            'imagelinks' => $imagelinks,
            'extralinks' => $extralinks

        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit(int $id)
    {
        $post = DB::table('posts')->select('*')->where('id', $id)->first();

        return view('editposts', [
            'post' => $post

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Application|\Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        try {

            $post = Post::find($id);
            $post->postName = $request->postName;
            $post->postCaption = $request->postCaption;
            $post->postDate = $request->postDate;
            $post->youtube = $request->youtube;
            $post->extraData = $request->extraData;
            $post->save();
            $response = 'Alterado com sucesso. ID: ' . $id;
        } catch (\Exception $e) {
            $response = 'Erro ao alterar. ID: ' . $id;
        }
        return redirect('posts')->with('response', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {

            $post = Post::find($id);
            $post->delete();
            $response = 'Deletado com sucesso. ID: ' . $id;
        } catch (\Exception $e) {
            $response = 'Erro ao deletar... ID: ' . $id;
        }

        return redirect('posts')->with('response', $response);
    }

    public function home()
    {
        $imagelinks = DB::table('imagelinks')->select('*')->orderBy('id', 'desc')->where('imageindex', 0)->paginate(6);

        return view('index', ['imagelinks' => $imagelinks]);
    }


}
