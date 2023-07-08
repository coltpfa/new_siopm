<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ramal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('ramal/create')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Ramal</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do ramal">
                                <div class="text-danger">{{$errors->first('nome')}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Tipo</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="tipo" id="tipo">
                                    <option value="1">Normal</option>
                                    <option value="2">Supervisão 190</option>
                                    <option value="3">Supervisão 193</option>
                                    <option value="4">Supervisão cívil</option>
                                    <option value="5">SOP 190</option>
                                    <option value="6">SOP Bombeiro</option>
                                    <option value="7">Interprete</option>
                               </select>
                                <div class="text-danger">{{$errors->first('tipo')}}</div>
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
