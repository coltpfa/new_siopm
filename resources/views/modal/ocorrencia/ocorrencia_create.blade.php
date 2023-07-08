<div class="card-body">
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastro de ocorrência</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('ocorrencia/create')}}">
                    {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="nome">Nome do solicitante</label>
                                    <input type="text" name="solicitante" class="form-control" id="solicitante" placeholder="nome do solicitante">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p>
                                    <input type="checkbox" name="anonimo" class="form-check-input" id="anonimo">
                                    <label class="form-check-label" for="anonimo">Anônimo</label>
                                </p>
                            </div>
                            <div class="col-md--3">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone">
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="cidade">Cidade</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="cidade" id="cidade">
                             @foreach ($cidade as $cid)
                                <option value="{{ $cid -> id }}">{{ $cid -> nome }}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço da ocorrência">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" name="numero" class="form-control" id="numero" placeholder="Número">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="referencia">Referência</label>
                            <input type="text" name="referencia" class="form-control" id="referencia" placeholder="Ponto de referência">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="bpmm">BPM/M</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="bpmm" id="bpmm">
                             @foreach ($bpmm as $b)
                                <option value="{{ $b -> id }}">{{ $b -> nome }}</option>
                             @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cia">Cia</label>
                            <input type="text" name="cia" class="form-control" id="cia" placeholder="Companhia">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="naturezaocorrencia">Natureza da ocorrência</label>
                            <input type="text" name="naturezaocorrencia" class="form-control" id="naturezaocorrencia" placeholder="Natureza da ocorrência">
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
