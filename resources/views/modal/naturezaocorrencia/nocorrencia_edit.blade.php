<div class="modal fade" id="modal-edit-{{$n->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Natureza da ocorrência - editar {{ $n -> codigo }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('naturezaocorrencia/edit/'.$n->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$n->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <input type="text" disabled name="codigo" class="form-control" id="codigo" placeholder="Código" value="{{ $n->codigo }}">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea id="descricao" name="descricao" rows="4" cols="50">{{ $n->descricao }}</textarea>
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
