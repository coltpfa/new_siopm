<?php

namespace App\Http\Controllers;

use App\Models\Bpmm;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class BpmmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bpmm = Bpmm::all();
        return view('bpmm', compact('bpmm'));
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

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $b = new Bpmm;
                $b -> nome = e($request->nome);
                $b -> tipo = e($request->tipo);
                $b ->id_user = Auth::user()->id;
                if ($b->save()){
                    return redirect()->back()->with('message', 'Ok! Batalhão cadastrado com sucesso!');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Batalhão já cadastrado.');

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
    public function show(Bpmm $bpmm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bpmm $bpmm)
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
                    ->with('error', 'Ops! Verifique o nome do batalhão.');
        }else{
            $nome = e($request->nome);
            $tipo = e($request->tipo);

            if (Bpmm::where('id', '=', $request->id)
                ->update(['nome' => $nome,
                          'tipo' => $tipo,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Batalhão atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o batalhão.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $b =Bpmm::find($id);
        $b ->delete();
        return redirect()->back()->with('message', 'Ok! Batalhão excluído com sucesso!');
    }
}
