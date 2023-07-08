<div class="modal fade" id="modal-edit-{{$cid->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Cidade - editar {{ $cid -> nome }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('cidade/edit/'.$cid->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$cid->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome da cidade</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da cidade" value="{{ $cid->nome }}">
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.card-body -->
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-outline-light">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
