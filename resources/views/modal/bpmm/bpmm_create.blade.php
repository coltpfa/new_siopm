<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">BPM/M</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('bpmm/create')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome do batalhão</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do batalhão">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Tipo</label><br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="Rádio patrulha" >Rádio patrulha<br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="Choque (Rota)" >Choque (Rota)<br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="Trânsito" >Trânsito<br>
                                <input type="radio" name="tipo" class="form-check-input" id="tipo" value="Bombeiros" >Bombeiros<br>
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
