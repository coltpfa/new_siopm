@extends('adminlte::page')

@section('title', 'Ramais')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Ramal</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Ramais</li>
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
                                Ramais
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar ramal
                            </button>
                            @include('modal.ramal.ramal_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Ramais</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ramal</th>
                                    <th>Tipo</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ramal as $r )
                                    <tr>
                                      <td>{{ $r -> id }}</td>
                                      <td>{{ $r -> nome }}</td>
                                      <td>
                                        @if($r->tipo==1) Normal @endif
                                        @if($r->tipo==2) Supervisão 190 @endif
                                        @if($r->tipo==3) Supervisão 193 @endif
                                        @if($r->tipo==4) Supervisão cívil @endif
                                        @if($r->tipo==5) SOP 190 @endif
                                        @if($r->tipo==6) SOP Bombeiro @endif
                                        @if($r->tipo==7) Interprete @endif
                                      </td>
                                      <td>
                                        <div class="">
                                          <div class="" style="">
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-{{$r->id}}">
                                                  <i class="fas fa-edit"></i>Editar
                                              </button>

                                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$r->id}}">
                                                  <i class="fas fa-trash"></i>Excluir
                                              </button>

                                              @include('modal.ramal.ramal_edit')
                                              @include('modal.ramal.ramal_delete')

                                      </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Ramal</th>
                                    <th>Tipo</th>
                                    <th>Ações</th>
                                </tr>
                                </tfoot>
                            </table>

                          </div>
                      </div>
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

