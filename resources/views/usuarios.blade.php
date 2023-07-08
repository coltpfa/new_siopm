@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Usuários</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Usuários</li>
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
                                Usuários
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar usuário
                            </button>
                            @include('modal.usuarios.usuario_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Usuários</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <td>Matrícula</td>
                              <th>Nome</th>
                              <th>Nível</th>
                              <th>Batalhão</th>
                              <th>Trabalhando</th>
                              <th>Status</th>
                              <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($usuarios as $u )
                                <tr>
                                    <td>{{$u->id}}</td>
                                    <td>{{$u->matricula}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->nivel}}</td>
                                    <td>@foreach ($bpmm as $b)
                                        @if($u->bpmm ==$b->id){{$b->nome}} @endif
                                    @endforeach
                                        {{$u->bpmm}}
                                    </td>
                                    <td>{{$u->trabalhando}}</td>
                                    <td>@if($u->status ==1) Ativado @endif
                                        @if($u->status ==0) Desativado @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$u->id}}">
                                            <i class="fas fa-edit"></i>Editar
                                        </button>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-status-{{$u->id}}">
                                            <i class="fas fa-times"></i>Status
                                        </button>

                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-senha-{{$u->id}}">
                                            <i class="fas fa-key"></i>Senha
                                        </button>

                                        @include('modal.usuarios.usuario_edit')
                                        @include('modal.usuarios.usuario_status')
                                        @include('modal.usuarios.usuario_senha')
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <td>Matrícula</td>
                                <th>Nome</th>
                                <th>Nível</th>
                                <th>Batalhão</th>
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

