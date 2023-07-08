<?php

namespace App\Http\Controllers;

use App\Models\Bpmm;
use App\Models\Ramais;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class UserController extends Controller
{
    public function index()
    {
        $usuarios= User::all();
        $bpmm=Bpmm::all();
        $ramais=Ramais::all();

        return view("usuarios", compact('usuarios','bpmm','ramais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request )
    {
        $rules = [
            'identificacao' => 'required',
            'name' => 'required|min:1|max:100|',
            'email' =>'required|min:1|max:100|unique:users,email',
            'matricula'=>'required|min:1|max:20|regex:/^[0-9]+$/i',
            'nivel'=>'required',
            'bpmm'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation' => 'required|min:6|max:18'
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'identificacao' => 'Campo obrigatório',
            'name.required' => 'Campo obrigatório',
            'name.min' => 'Mínimo de caracteres é 1',
            'name.max' => 'Máximo de caracteres são 100',
            'email.required'=>'Campo obrigatório',
            'email.min' => 'Mínimo de caracteres é 1',
            'email.max' => 'Máximo de caracteres são 100',
            'email.unique' => 'Email já cadastrado',
            'matricula.required'=>'Campo obrigatório',
            'matricula.min' => 'Mínimo de caracteres é 1',
            'matricula.max' => 'Máximo de caracteres são 100',
            'matricula.regex' => 'Somente números',
            'nivel.required'=>'Campo obrigatório',
            'bpmm.required'=>'Campo obrigatório',
            'password.required' => 'Campo obrigatório',
            'password.confirmed' => 'Senhas não coincidem',
            'password_confirmation.required' => 'Campo obrigatório',
            'password_confirmation.min' => 'Mínimo de caracteres são 6',
            'password_confirmation.max' => 'Máximo de caracteres são 18',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
//dd($validator);
        //Si la validación no es correcta redireccionar al formulario con los errores
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{ // criado novo categoria
            $u = new User();
            $u -> identificacao = e($request->identificacao);
            $u -> name = e($request->name);
            $u -> email = e($request->email);
            $u -> matricula = e($request->matricula);
            $u -> nivel = e($request->nivel);
            $u -> bpmm = e($request->bpmm);
            $u -> password = bcrypt($request->password);
            $u -> status = 1;
            $u -> noturno = 0;

            if ($u->save()){
                return redirect()->back()->with('message', 'Ok! Usuário cadastrado com sucesso!');
            }else{
                return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
            }
            return redirect()->back()->withInput()->with('status', 'Ops! Usuário já cadastrado.');

        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ocorrencia $ocorrencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $rules = [
            'status' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'status.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $status = e($request->status);


            if (User::where('id', '=', $request->id)
                ->update(['status' => $status,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Usuário atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o status do  usuário.');
            }
        }
    }

    /**update new password */
    public function passreset(Request $request)
    {
        $rules = [
            'password' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'password.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $password = e($request->password);


            if (User::where('id', '=', $request->id)
                ->update(['password' => bcrypt($password),

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Senha do usuário atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a senha do  usuário.');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'identificacao' => 'required',
            'name' => 'required|min:1|max:100|',
            'email' =>'required|min:1|max:100|',
            'matricula'=>'required|min:1|max:20|regex:/^[0-9]+$/i',
            'nivel'=>'required',
            'bpmm'=>'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'identificacao' => 'Campo obrigatório',
            'name.required' => 'Campo obrigatório',
            'name.min' => 'Mínimo de caracteres é 1',
            'name.max' => 'Máximo de caracteres são 100',
            'email.required'=>'Campo obrigatório',
            'email.min' => 'Mínimo de caracteres é 1',
            'email.max' => 'Máximo de caracteres são 100',
            'matricula.required'=>'Campo obrigatório',
            'matricula.min' => 'Mínimo de caracteres é 1',
            'matricula.max' => 'Máximo de caracteres são 100',
            'matricula.regex' => 'Somente números',
            'nivel.required'=>'Campo obrigatório',
            'bpmm.required'=>'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        //dd($validator);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $identificacao = e($request->identificacao);
            $nome = e($request->name);
            $email = e($request->email);
            $matricula = e($request->matricula);
            $nivel = e($request->nivel);
            $bpmm = e($request->bpmm);

            if (User::where('id', '=', $request->id)
                ->update(['identificacaco' => $identificacao,
                          'name' => $nome,
                          'email' => $email,
                          'matricula' => $matricula,
                          'nivel' => $nivel,
                          'bpmm' =>$bpmm,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Usuário atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o usuário.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ocorrencia $ocorrencia)
    {
        //
    }
}
