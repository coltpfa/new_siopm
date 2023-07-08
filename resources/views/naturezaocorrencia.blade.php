@extends('adminlte::page')

@section('title', 'Natureza da ocorrência')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Natureza da ocorrência</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Natureza da ocorrência</li>
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
                                Natureza da ocorrência
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar natureza da ocorrência
                            </button>
                            @include('modal.naturezaocorrencia.nocorrencia_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Natureza da ocorrência</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <td>Código</td>
                              <th>Descrição</th>
                              <th>Status</th>
                              <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($nocorrencias as $n )
                                <tr>
                                    <td>{{$n->id}}</td>
                                    <td>{{$n->codigo}}</td>
                                    <td>{{$n->descricao}}</td>
                                    <td>@if($n->status ==1) Ativado @endif
                                        @if($n->status ==0) Desativado @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$n->id}}">
                                            <i class="fas fa-edit"></i>Editar
                                        </button>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-status-{{$n->id}}">
                                            <i class="fas fa-times"></i>Status
                                        </button>

                                        @include('modal.naturezaocorrencia.nocorrencia_edit')
                                        @include('modal.naturezaocorrencia.nocorrencia_status')
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <td>Código</td>
                                <th>Descrição</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
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

