<?php

namespace App\Http\Controllers;

use App\Models\Bpmm;
use App\Models\Ramais;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function index2()
    {

        return view('home2');
    }

    public function sessao(Request $request){
        $rules = [
            'nivel' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nivel.required' => 'Campo obrigatório',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique os dados informados.');
        }else{
            $nivel = e($request->nivel)??null;
            $ramal = e($request->ramal)??null;
            $unidade = e($request->unidade)??null;
            $bpmm = e($request->bpmm)??null;
            $especialidade = e($request->especialidade)??null;
            $gb = e($request->gb)??null;
            $supervisor = e($request->supervisor)??null;
            $cpa = e($request->cpa)??null;

            if($nivel=='Atendente'){
               $trabalhando = $ramal;
            }
            if($nivel=='Controlador' & $unidade=='Radio-patrulhamento'){
                $trabalhando = $unidade.'-'.$bpmm;
            }

            if($nivel=='Controlador' & $unidade=='Especialidades'){
                $trabalhando = $unidade.'-'.$especialidade;
            }

            if($nivel=='Controlador' & $unidade=='Bombeiros'){
                $trabalhando = $unidade.'-'.$gb;
            }
            if($nivel=='Supervisor'){
                $trabalhando = $supervisor;
            }
            if($nivel=='STQ'){
                $trabalhando = 'STQ';
            }
            if($nivel=='Tecnica'){
                $trabalhando = 'Tecnica';
            }
            if($nivel=='Chefia'){
                $trabalhando = 'Chefia';
            }

            if (User::where('id', '=', $request->id)
                ->update(['nivel' => $nivel,
                          'trabalhando' => $trabalhando,

                ])){
                return redirect('home2')
                    ->with('status', 'Sessao atualizada com sucesso!');
            }else{
                return view('home')
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a sessão do  usuário.');
            }
        }
    }

    public function toggleDarkMode(Request $request)
    {
        if ($request->session()->has('dark-mode')) {
            $request->session()->forget('dark-mode');
        } else {
            $request->session()->put('dark-mode', true);
        }

        return redirect()->back();
    }
}
