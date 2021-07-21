<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{

    public function showUsuario()
    {
        return view('layouts.usuario.edit-usuario');
    }

    public function removeUsuario($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/home');
    }

    public function updateUsuario(Request $request)
    {

        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }
    public function listaClientes()
    {
        $users = User::all();
        return view('home', ['users' => $users]);
    }

    // public function salvaUsuario(Request $request)
    // {
    //     $user = auth()->user();
    //     $data = $request->all();
    //     // dd($data);
    //     $arr["name"] = $data["nome"];
    //     // $arr["email"] = $data["email"];
    //     // $arr["regiao"] = $data["regiao"];
    //     $arr["email"] = $data["email"];
    //     // $arr[""] = $data[""];
    //     $response = User::findOrFail($user->id)->update($arr);
    //     // dd($response);
    //     return redirect('/config-usuario');
    // }

    public function novoUsuario(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $usuario = array();

        $usuario["name"] = $data["usuario_nome"];
        $usuario["email"] = $data["usuario_email"];
        $usuario["password"] = $data["usuario_senha"];
        $validator =  Validator::make($usuario, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        // retona erros de validacao
        if ($validator->fails()) {
            return redirect('/usuario/novo/')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = new User();
            $user->name = $usuario["name"];
            $user->email = $usuario["email"];
            $user->password = Hash::make($usuario["password"]);
            $user->save();
            return redirect('/home');
        }
    }
    public function salvaUsuario(Request $request, $id)
    {
        $data = $request->all();
        $usuario = array();

        $usuario["name"] = $data["usuario_nome"];
        $usuario["email"] = $data["usuario_email"];

        // valida update de usuario SEM senha
        if ($data["usuario_senha"] == null) {
            $validator =  Validator::make($usuario, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
            // retona erros de validacao
            if ($validator->fails()) {
                return redirect('/usuario/editar/' . $id)
                    ->withErrors($validator)
                    ->withInput();
            } else {
                User::findOrFail($id)->update($usuario);
                return redirect('/usuario/editar/' . $id)->with('msg', 'Sucesso');
            }
        } else {
            // valida update de usuario COM senha
            $usuario["password"] = $data["usuario_senha"];
            $validator =  Validator::make($usuario, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]);
            // retona erros de validacao
            if ($validator->fails()) {
                return redirect('/usuario/editar/' . $id)
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $usuario["password"] = Hash::make($data["usuario_senha"]);
                User::findOrFail($id)->update($usuario);
                return redirect('/usuario/editar/' . $id)->with('msg', 'Sucesso');
            }
        }
    }

    public function editaUsuario($id)
    {
        // $user = auth()->user();

        // $event = User::findOrFail($id);
        // if usuario nao logado
        // if ($user->id != $event->usuario_id) {
        //     return redirect('/clientes');
        // }
        $users = User::findOrFail($id);
        // $cliente_documentos = ClienteDocumentos::all()->where('cliente_id', $id);
        // $cliente_documentos = ClienteDocumentos::join('cliente_cnis', 'cliente_documentos.documento_nome', '=', (DB::table('cliente_documentos')) )->where('cliente_documentos.cliente_id', $id)->get();
        // dd($cliente_documentos);
        // dd($cliente_documentos[1]->documento_nome);
        return view('usuario-novo', [
            'users' => $users,
        ]);
        // return view('teste-layouts.cliente.edit-cliente', ['cliente' => $clientes[0]]);
    }

    public function editaPagamento()
    {
        // $cliente_dados_cnis = ClienteDadosCnis::all();
        return view('layouts.usuario.edit-pagamento', [
            // 'cliente' => $clientes,
        ]);
    }
}
