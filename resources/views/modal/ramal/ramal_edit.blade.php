<div class="modal fade" id="modal-edit-{{$r->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Ramal - editar {{ $r -> nome }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('ramal/edit/'.$r->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$r->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome do ramal</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do ramal" value="{{ $r->nome }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Tipo</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="tipo" id="tipo">
                                <option value="1" @if($r->tipo==1) selected @endif>Normal</option>
                                <option value="2" @if($r->tipo==2) selected @endif>Supervisão 190</option>
                                <option value="3" @if($r->tipo==3) selected @endif>Supervisão 193</option>
                                <option value="4" @if($r->tipo==4) selected @endif>Supervisão cívil</option>
                                <option value="5" @if($r->tipo==5) selected @endif>SOP 190</option>
                                <option value="6" @if($r->tipo==6) selected @endif>SOP Bombeiro</option>
                                <option value="7" @if($r->tipo==7) selected @endif>Interprete</option>
                           </select>
                            <div class="text-danger">{{$errors->first('tipo')}}</div>
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
