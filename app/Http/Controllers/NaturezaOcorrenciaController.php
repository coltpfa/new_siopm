<?php

namespace App\Http\Controllers;

use App\Models\NaturezaOcorrencia;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class NaturezaOcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nocorrencias=NaturezaOcorrencia::all();

        return view("naturezaocorrencia", compact('nocorrencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rules = [
            'codigo' => 'required|min:1|max:10|unique:natureza_ocorrencias,codigo',
            'descricao' =>'required|min:1|max:200|',

        ];
        //Posibles mensajes de error de validación
        $messages = [
            'codigo.required' => 'Campo obrigatório',
            'codigo.min' => 'Mínimo de caracteres é 1',
            'codigo.max' => 'Máximo de caracteres são 10',
            'codigo.unique' => 'Código já cadastrado',
            'descricao.required'=>'Campo obrigatório',
            'descricao.min' => 'Mínimo de caracteres é 1',
            'descricao.max' => 'Máximo de caracteres são 200',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
//dd($validator);
        //Si la validación no es correcta redireccionar al formulario con los errores
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{ // criado novo categoria
            $n = new NaturezaOcorrencia();
            $n -> codigo = e($request->codigo);
            $n -> descricao = e($request->descricao);
            $n -> id_user = Auth::user()->id;
            $n -> status = 1;

            if ($n->save()){
                return redirect()->back()->with('message', 'Ok! Natureza da ocorrência cadastrada com sucesso!');
            }else{
                return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
            }
            return redirect()->back()->withInput()->with('status', 'Ops! Natureza da ocorrência já cadastrada.');
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
    public function show(NaturezaOcorrencia $naturezaOcorrencia)
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


            if (NaturezaOcorrencia::where('id', '=', $request->id)
                ->update(['status' => $status,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Natureza da ocorrência atualizada com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a natureza da ocorrência.');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'descricao' => 'required|min:1|max:200|',

        ];
        //Posibles mensajes de error de validación
        $messages = [
            'descricao.required' => 'Campo obrigatório',
            'descricao.min' => 'Mínimo de caracteres é 1',
            'descricao.max' => 'Máximo de caracteres são 200',
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
            $descricao = e($request->descricao);

            if (NaturezaOcorrencia::where('id', '=', $request->id)
                ->update(['descricao' => $descricao,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Natureza da ocorrência atualizada com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a natureza da ocorrência.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NaturezaOcorrencia $naturezaOcorrencia)
    {
        //
    }
}
