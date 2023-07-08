@extends('adminlte::page')

@section('title', 'Cadastro de Emergência')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cadastro de Emergência</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item active">Cadastro de Emergência</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

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

<?php

?>
@section('content')


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Cadastro de Emergência
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <form action="#" method="POST" autocomplete="off" class="col-md-8">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-8 mb-3">
                                        <label for="inputSolicitante" class="form-label">Solicitante</label>
                                        <div class="d-flex align-items-center">
                                            <input type="text" name="solicitante" id="solicitante" class="form-control" autocomplete="off" placeholder="Digite o nome do solicitante" required>
                                            <div class="form-check ms-3">
                                                <input class="form-check-input" type="checkbox" id="checkboxAnonimo">
                                                <label class="form-check-label" for="checkboxAnonimo">Anônimo</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputTelefone" class="form-label">Telefone</label>
                            <input type="tel" name="telefone" class="form-control" autocomplete="off" id="inputTelefone" placeholder="Digite o telefone" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputCidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control" autocomplete="off" id="inputCidade"
                               placeholder="Digite a cidade" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label for="inputEndereco" class="form-label">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="inputEndereco"
                                   placeholder="Digite o endereço" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="inputNumero" class="form-label">Número</label>
                            <input type="text" name="numero" class="form-control" id="inputNumero"
                                   placeholder="Digite Número" maxlength="6" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="inputComplemento" class="form-label">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="inputComplemento"
                                   placeholder="Complemento">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label for="inputBairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="inputBairro"
                                   placeholder="Digite o bairro" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputReferencia" class="form-label">Referência</label>
                            <input type="text" name="referencia" class="form-control" id="inputReferencia"
                                   placeholder="Digite uma referência" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2 mb-2">
                            <label for="inputBatalhao" class="form-label">BPM/M</label>
                            <input type="text" name="batalhao" class="form-control" id="inputBatalhao"
                                   placeholder="Batalhão" maxlength="5" required>
                        </div>
                        <div class="col-md-2 mb-2">
                            <label for="inputCompanhia" class="form-label">CIA</label>
                            <input type="text" name="companhia" class="form-control" id="inputCompanhia"
                                   placeholder="Companhia" required>
                        </div>
                        <div class="col-md-8 mb-4">
                            <label for="inputNatureza" class="form-label">Natureza da Ocorrência</label>
                            <input type="text" name="natureza" class="form-control" id="inputNatureza" placeholder="Digite a natureza da ocorrência" required>
                        </div>

                    </div>




                    <!-- Marque Box -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkPolicial">
                        <label class="form-check-label" for="checkPolicial">POLICIAL EM PERIGO</label>
                    </div>
                    <br>
                    <div id="mensagem" class="bg-danger text-white font-weight-bold text-center" style="display: none;">
                        ⚠️ VOCÊ SELECIONOU A OPÇÃO POLICIAL EM PERIGO ⚠️
                    </div>
            </div>
        </div>
    </section>
@stop
@section('js')
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@stop

