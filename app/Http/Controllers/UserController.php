<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->select('name', 'email as user_email')->get();

        return \response($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
//        $user->password_confirmation = Hash::make($request->confirmPassword);
        $user->save();
//        $adminCodeEnv = env('ADMINCODE', '123');

//        $name = $request->name;
//        $email = $request->email;
//        $password = $request->password;
//        $confirmPassword = $request->confirmPassword;
//        $adminCode = $request->adminCode;

//         $dados = [
//            $name,
//            $email,
//            $password,
//            $confirmPassword,
//            $adminCode
//        ];
//
//        foreach($dados as $dado) {
//            if($dado === null || strlen($dado) === 0) {
//                $response = 'Preencha todos os dados.';
//                return redirect('cadastro')->with('response', $response);
//            }
//        }
//
//        if($adminCode != $adminCodeEnv) {
//            $response = 'Código de administrador errado.';
//            return redirect('cadastro')->with('response', $response);
//        }
//
//        if($password !== $confirmPassword) {
//            $response = 'Senhas não são iguais.';
//            return redirect('cadastro')->with('response', $response);
//        }
//
//        try {
//
//            DB::table('users')->insert([
//                'name' => $name,
//                'email' => $email,
//                'password' => $password
//            ]);
//            $response = 'Cadastrado com sucesso.';
//        } catch (\Exception $e) {
//            if($e->getCode() === '23000') {
//                $response = 'Esse e-mail já existe na nossa base de dados. Por favor, faça o login.';
//            } else {
//                $response = 'Erro. Por favor, contate um administrador.';
//            }
//
//        }


//        return redirect('cadastro');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = DB::table('users')->select('name', 'email as user_email')->where('id', $id)->first();

        return \response($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
