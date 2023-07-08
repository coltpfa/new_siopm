@extends('adminlte::page')

@section('title', 'SIOPM-off')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
    <row>
        <div class="container-fluid">
            <div>
                @if (Session('status'))
                <div class="bg-success" style="padding: 20px;">
                    {{Session('status')}}
                </div>
            @endif
            @if(Session('error'))
                <div class="bg-danger" style="padding: 20px;">
                    {{Session('error')}}
                </div>
            @endif
            @if(Session('message'))
                <div class="bg-success" style="padding: 20px;">
                    {{Session('message')}}
                </div>
            @endif
            </div>
        </div>
    </row>
@stop
@section('content')
<?php
$bpmm =App\Models\Bpmm::all();
$ramais =App\Models\Ramais::all();
?>
<body class="modal-open" style="padding-right:17px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Você está logado!</p>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myprograming" tabindex="-1" aria-labelledby="myprograming" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="myprograming">Início de sessão</h5>

            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <form method="post" action="{{url('home/sessao/')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{Auth::user()->id}}" />
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (Auth::user()->nivel == "Atendente" || Auth::user()->nivel == "Despachador")
                                    <div class="form-group">
                                        <label for="nome">Nível</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="nivel" id="nivel" onchange="mostrarOpcoes()">
                                            <option value="">Selecione um nível</option>
                                            <option value="Atendente" @if(Auth::user()->nivel=='Atendente')selected @endif >Atendente</option>
                                            <option value="Despachador" @if(Auth::user()->nivel=='Despachador')selected @endif>Despachador</option>
                                    </select>
                                    </div>
                                    @endif

                                    <div class="form-group" id="divbatalhao">
                                        {{--@if (Auth::user()->nivel == 'Despachador')--}}
                                        <label for="nome">Nome do batalhão</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="bpmm" id="bpmm">
                                            @foreach ($bpmm as $b)
                                            <option value="{{ $b -> nome }} - {{$b -> tipo}}" @if(Auth::user()->trabalhando == $b->nome) selected @endif>{{ $b -> nome }} - {{$b -> tipo}}</option>
                                            @endforeach
                                    </select>
                                    {{--@endif--}}
                                    </div>

                                    <div class="form-group" id="divramal">
                                        {{--@if (Auth::user()->nivel == 'Atendente')--}}
                                        <label for="nome">Ramal </label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="ramal" id="ramal">
                                            <option value="" selected="" disabled="">Selecione o RAMAL</option>
                                            @foreach ($ramais as $r )
                                                <option value="{{$r->nome}}"@if(Auth::user()->trabalhando == $r->nome) selected @endif>{{$r->nome}}</option>
                                            @endforeach

                                    </select>
                                    {{--@endif--}}
                                    </div>

                                </div>
                            </div>
                    </div>
                <!-- /.card-body -->
                </div>

                <div class="modal-footer ">

                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>



@stop
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<!--Modal JS Script -->
@if (Auth::user()->nivel == "Atendente" or Auth::user()->nivel == "Despachador")
<script type="text/javascript">
    /*window.onload = () => {
    $('#myprograming').modal('show');
    mostrarOpcoes();

    }
    function mostrarOpcoes() {
      var selectNivel = document.getElementById("nivel");
      var divBatalhao = document.getElementById("divbatalhao");
      var divRamal = document.getElementById("divramal");

      if (selectNivel.value === "Atendente") {
        divBatalhao.style.display = "none";
        divRamal.style.display = "block";
      } else if (selectNivel.value === "Despachador") {
        divBatalhao.style.display = "block";
        divRamal.style.display = "none";
      }
    }

    /*$(document).ready(function() {
    $('#batalhao').hide();
    $('#ramal').hide();
        $('#nivel').change(function() {
            if ($('#nivel').val() == 'Despachador') {
                $('#batalhao').show();
                $('#ramal').hide();
            } else {
                $('#batalhao').hide();
                $('#ramal').show();
            }
        });
    });*/

</script>
@endif

