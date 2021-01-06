<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtralinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $extralinks = DB::table('extralinks')->select('extralinks.id as extralinkId', 'extralinks.name', 'extralinks.link', 'extralinks.postId', 'posts.postName')->orderByDesc('extralinks.id')->leftJoin('posts', 'extralinks.postId', '=', 'posts.id')->paginate(10);

        return view('extralinkstable', ['extralinks' => $extralinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $posts = DB::table('posts')->select('*')->orderBy('id','desc')->paginate(10);
        return view('createextralinks', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            $name = $request->name;
            $link = $request->link;
            $postId = $request->postId;

            DB::table('extralinks')->insert([
                'name' => $name,
                'postId' => $postId,
                'link' => $link
            ]);

            $response = "Cadastrado com sucesso. Nome: " . $name;

        } catch (\Exception $e) {
            $response = "Erro ao cadastrar. Nome: " . $name;
        }

        return redirect('extralinks')->with('response', $response);
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
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $extralink = DB::table('extralinks')
            ->select('extralinks.id as extralinkId', 'extralinks.name', 'extralinks.link', 'extralinks.postId', 'posts.id', 'posts.postName')
            ->where('extralinks.id', $id)
            ->leftJoin('posts', 'extralinks.postId', '=', 'posts.id')
            ->first();

        $posts = DB::table('posts')
            ->select('*')
            ->orderBy('id', 'desc')
            ->where('id', '!=', $extralink->postId)
            ->paginate(12);

        return view('editextralinks', [
            'extralink' => $extralink,
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
        try {

            $name = $request->name;
            $link = $request->link;
            $postId = $request->postId;

            DB::table('extralinks')
                ->where('id', $id)
                ->insert([
                'name' => $name,
                'postId' => $postId,
                'link' => $link
            ]);
            $response = 'Alterado com sucesso. ID ' . $id;
        } catch (\Exception $e) {
            $response = 'Erro ao alterar. ID ' . $id;
        }
        return redirect('extralinks')->with('response', $response);

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

            DB::table('extralinks')
                ->where('id', $id)
                ->delete();
            $response = 'Deletado com sucesso com o ID ' . $id;
        } catch (\Exception $e) {
            $response = 'Erro ao deletar... o ID ' . $id;
        }

        return redirect('extralinks')->with('response', $response);
    }
}
