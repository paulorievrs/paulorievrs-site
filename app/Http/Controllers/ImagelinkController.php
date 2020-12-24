<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagelinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $imagelinks = DB::table('imagelinks')->select('imagelinks.id as imageId', 'imagelinks.imageLink', 'imagelinks.imageIndex', 'posts.postName')->orderByDesc('imagelinks.id')->leftJoin('posts', 'imagelinks.postId', '=', 'posts.id')->paginate(10);


        return view('imagelinkstable', ['imagelinks' => $imagelinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $posts = DB::table('posts')->select('*')->orderBy('id','desc')->paginate(10);
        return view('createimagelinks', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            $imageLink = $request->imagelink;
            $postId = $request->postId;
            $imageIndex = $request->imageIndex;

            DB::table('imagelinks')->insert([
                'imageLink' => $imageLink,
                'postId' => $postId,
                'imageIndex' => $imageIndex
            ]);
            $response = 'Cadastrado com sucesso. Link: ' . $imageLink;
        } catch (\Exception $e) {
            $response = 'Erro ao cadastrar. Link: ' . $imageLink;
        }

        return redirect('imagelinks')->with('response', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagelinks = DB::table('imagelinks')->select('imagelinks.id as imageId', 'imagelinks.imageLink', 'imagelinks.imageIndex', 'posts.postName', 'posts.id')->where('imagelinks.id', $id)->leftJoin('posts', 'imagelinks.postId', '=', 'posts.id')->first();
        return \response($imagelinks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagelink = DB::table('imagelinks')
            ->select('imagelinks.id as imageId', 'imagelinks.imageLink', 'imagelinks.postId', 'imagelinks.imageIndex', 'posts.postName', 'posts.id')
            ->where('imagelinks.id', $id)
            ->leftJoin('posts', 'imagelinks.postId', '=', 'posts.id')
            ->first();

        $posts = DB::table('posts')
            ->select('*')
            ->orderBy('id', 'desc')
            ->where('id', '!=', $imagelink->postId)
            ->paginate(12);

        return view('editimagelinks', [
            'imagelink' => $imagelink,
            'posts' => $posts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $imageLink = $request->imagelink;
        $postId = $request->postId;
        $imageIndex = $request->imageIndex;

        try {

            DB::table('imagelinks')
                ->where('id', $id)
                ->update([
                'imageLink' => $imageLink,
                'postId' => $postId,
                'imageIndex' => $imageIndex
                ]);

            $response = 'Alterado com sucesso. ID: ' . $id;

        } catch (\Exception $e) {
            $response = 'Erro ao alterar. ID: ' . $id;
        }
        return redirect('imagelinks')->with('response', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {

            DB::table('imagelinks')
                ->where('id', $id)
                ->delete();
            $response = 'Deletado com sucesso, ID: ' . $id;
        } catch (\Exception $e) {
            $response = 'Erro ao deletar... ID: ' . $id;
        }

        return redirect('imagelinks')->with('response', $response);
    }


}
