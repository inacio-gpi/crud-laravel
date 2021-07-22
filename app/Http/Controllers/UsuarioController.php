<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{

    public function removeUsuario($id)
    {
        // deleta usuario com mensagem de sucesso
        $result = User::findOrFail($id)->delete();
        if ($result) {
            return response()->json(['success' => 'Usuário removido']);
        }
        return response()->json(['err' => 'Erro ao deletar usuário'], 400);
    }

    public function listaUsuarios()
    {
        // lista todos os usuarios
        $users = User::all();
        return view('home', ['users' => $users]);
    }

    public function salvaNovoUsuario(Request $request)
    {
        // salva novo usuario com email nao repetido
        $data = $request->all();
        $usuario = array();

        $usuario["name"] = $data["usuario_nome"];
        $usuario["email"] = $data["usuario_email"];
        $usuario["password"] = $data["usuario_senha"];
        // valida entrada
        $validator =  Validator::make($usuario, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        // retona erros de validacao
        if ($validator->fails()) {
            // return redirect('/usuario/novo/')
            //     ->withErrors($validator)
            //     ->withInput();

            return response()->json($validator->errors(), 400);
        } else {
            try {
                $user = new User();
                $user->name = $usuario["name"];
                $user->email = $usuario["email"];
                $user->password = Hash::make($usuario["password"]);
                $user->save();
                return response()->json(['success' => 'Cliente ID: ' . $user->id . ' salvo com sucesso.']);
            } catch (\Exception $e) {
                return response()->json(['success' => 'Usuario com o email já inserido.']);
            }
        }
    }

    public function updateUsuario(Request $request, $id)
    {
        // edita os usuarios
        // nao deixa atualizar para um email q já existe no banco
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
                // return redirect('/usuario/editar/' . $id)
                //     ->withErrors($validator)
                //     ->withInput();
                return response()->json($validator->errors(), 400);
                // echo "teste";die;
            } else {
                try {
                    // return redirect('/usuario/editar/' . $id)->with('msg', 'Sucesso');
                    User::findOrFail($id)->update($usuario);
                    return response()->json(['success' => 'Atualizado com Sucesso']);
                } catch (\Exception $e) {
                    return response()->json(['success' => 'Usuario com o email já inserido.']);
                }
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
                // return redirect('/usuario/editar/' . $id)
                //     ->withErrors($validator)
                //     ->withInput();

                return response()->json($validator->errors(), 400);
            } else {

                try {
                    $usuario["password"] = Hash::make($data["usuario_senha"]);
                    User::findOrFail($id)->update($usuario);

                    // return redirect('/usuario/editar/' . $id)->with('msg', 'Sucesso');
                    return response()->json(['success' => 'Atualizado com Sucesso']);
                } catch (\Exception $e) {
                    return response()->json(['success' => 'Usuario com o email já inserido.']);
                }
            }
        }
    }

    public function editaUsuario($id)
    {
        // retorna pagina para cadastrar novo usuario
        $users = User::findOrFail($id);
        return view('usuario-novo', [
            'users' => $users,
        ]);
    }
}
