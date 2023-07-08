<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar cidade</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('mapa/create')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                                <div class="text-danger">{{$errors->first('nome')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="nome">Descrição</label>
                                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
                                <div class="text-danger">{{$errors->first('descricao')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="nome">Mapa</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Selecionar mapa</label>
                                    <input type="file" class="custom-file-input" id="mapa" name="mapa">
                                    <div class="text-danger">{{$errors->first('mapa')}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess">Salvar</button>
                </form>
            </div>
        </div>
          <!-- /.modal-content -->
    </div>
        <!-- /.modal-dialog -->
</div>
@section('js')
<script src={{url('/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>

@endsection
