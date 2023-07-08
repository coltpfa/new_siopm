<?php

namespace App\Http\Controllers;

use App\Models\Mapa;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapa = Mapa::all();
        return view('mapa', compact('mapa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rules = [
            'nome' => 'required|min:1|max:100|',
            'descricao' => 'required|min:1|max:200|',
            'mapa' => 'required|max:9096'
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',
            'descricao.required' => 'Campo obrigatório',
            'descricao.min' => 'Mínimo de caracteres é 1',
            'descricao.max' => 'Máximo de caracteres são 100',
            'mapa.required' => 'Campo obrigatório',
            'mapa.max' => 'Tamanho máximo 9MB',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
//dd($validator);
        //Si la validación no es correcta redireccionar al formulario con los errores
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }else{ // criado novo mapa

            $file = $request->file('mapa');

            // Defina o diretório de destino para o arquivo
            $destinationPath = public_path('mapas');

            // Gere um nome único para o arquivo
            $fileName = uniqid();
            $fileSave = $fileName. '.' . $file->getClientOriginalExtension();

            // Movendo o arquivo para o diretório de destino
            $file->move($destinationPath, $fileSave);
            if($request->hasFile('mapa')){
                $m = new Mapa();
                $m -> nome = e($request->nome);
                $m -> descricao = e($request->descricao);
                $m -> file_name = $fileName;
                $m -> file_path = $destinationPath.'/'.$fileSave;
                $m -> status = 1;
                $m -> id_user = Auth::user()->id;
            }else{
                return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao fazer o upload dos dados.');
            }
        }

            if ($m->save()){
                return redirect()->back()->with('message', 'Ok! Mapa cadastrado com sucesso!');
            }else{
                return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
            }
            return redirect()->back()->withInput()->with('status', 'Ops! Mapa já cadastrado.');

        }

    public function getKml($id)
    {
        $file = Mapa->where('id','=',$id);
        $filePath = public_path('mapas/' . $file . '.kml');

        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);
            return Response::make($content, 200, [
                'Content-Type' => 'application/vnd.google-earth.kml+xml',
                'Content-Disposition' => 'inline; filename=64a4e857eb6fe.kml"'
                ]);
            }

            abort(404, 'Arquivo KML não encontrado');
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
    public function show(Mapa $mapa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapa $mapa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapa $mapa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapa $mapa)
    {
        //
    }
}
