@extends('adminlte::page')

@section('title', 'Mapa')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Mapa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mapa</li>
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
                                Mapas
                            </h3>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Cadastrar mapa
                            </button>
                            @include('modal.mapa.mapa_create')

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Mapas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Data importação</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($mapa as $m )
                              <tr>
                                <td>{{ $m -> id }}</td>
                                <td>{{ $m -> created_at }}</td>
                                <td>{{ $m -> nome }}</td>
                                <td>
                                  <div class="">
                                    <div class="" style="">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-viewmap-{{$m->id}}">
                                            <i class="fas fa-globe"></i>Mapa
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$m->id}}">
                                            <i class="fas fa-trash"></i>Excluir
                                        </button>
                                        @include('modal.mapa.mapa_view')
                                        @include('modal.mapa.mapa_delete')

                                </td>

                              </tr>
                              @endforeach

                            </tbody>
                          </table>

                          </div>
                      </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@stop


