<?php

namespace App\Http\Controllers;

use App\Models\Ramais;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class RamaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ramal = Ramais::all();
        return view('ramal', compact('ramal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post'))
        {
            //Roles de validación
            $rules = [
                'nome' => 'required|min:1|max:100|unique:ramais,nome',
                'tipo' => 'required',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nome.required' => 'Campo obrigatório',
                'nome.min' => 'Mínimo de caracteres é 1',
                'nome.max' => 'Máximo de caracteres são 100',
                'nome.unique' => "Ramal já cadastrado",
                'tipo.required' => 'Campo obrigatório',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $r = new Ramais;
                $r -> nome = e($request->nome);
                $r -> tipo = e($request->tipo);
                $r ->id_user = Auth::user()->id;
                if ($r->save()){
                    return redirect()->back()->with('message', 'Ok! Ramal cadastrada com sucesso!');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Ramal já cadastrado.');

            }
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
    public function show(Ramais $ramais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ramais $ramais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'nome' => 'required|min:1|max:100',
            'tipo' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',
            'tipo.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique o nome do ramal.');
        }else{
            $nome = e($request->nome);
            $tipo = e($request->tipo);
            if (Ramais::where('id', '=', $request->id)
                ->update(['nome' => $nome,
                          'tipo' => $tipo,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Ramal atualizada com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a ramal.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $r =Ramais::find($id);
        $r ->delete();
        return redirect()->back()->with('message', 'Ok! Ramal excluído com sucesso!');
    }
}
