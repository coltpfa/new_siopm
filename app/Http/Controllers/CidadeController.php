<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidade = Cidade::all();
        return view('cidade', compact('cidade'));
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
                'nome' => 'required|min:1|max:100|',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nome.required' => 'Campo obrigatório',
                'nome.min' => 'Mínimo de caracteres é 1',
                'nome.max' => 'Máximo de caracteres são 100',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $cid = new Cidade;
                $cid -> nome = e($request->nome);
                $cid ->id_user = Auth::user()->id;
                if ($cid->save()){
                    return redirect()->back()->with('message', 'Ok! Cidade cadastrada com sucesso!');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Cidade já cadastrado.');

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
    public function show(Cidade $cidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'nome' => 'required|min:1|max:100|',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique o nome da cidade.');
        }else{
            $nome = e($request->nome);

            if (Cidade::where('id', '=', $request->id)
                ->update(['nome' => $nome,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Cidade atualizada com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a cidade.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cid =Cidade::find($id);
        $cid ->delete();
        return redirect()->back()->with('message', 'Ok! Cidade excluída com sucesso!');

    }
}
