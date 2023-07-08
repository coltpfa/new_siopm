<div class="modal fade" id="modal-edit-{{$u->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Usuário - editar {{ $u -> name }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('usuario/edit/'.$u->id)}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$u->id}}" />
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Identificação</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="identificacao" id="identificacao">
                                    <option value="CIVIL" @if($u->identificacao =='CIVIL') selected @endif>CÍVIL</option>
                                    <option value="SD-PM" @if($u->identificacao =='SD-PM') selected @endif>SD-PM</option>
                                    <option value="CB-PM" @if($u->identificacao =='CB-PM') selected @endif>CB-PM</option>
                                    <option value="3ºSGT-PM" @if($u->identificacao =='3ºSGT-PM') selected @endif>3ºSGT-PM</option>
                                    <option value="2ºSGT-PM" @if($u->identificacao =='2ºSGT-PM') selected @endif>2ºSGT-PM</option>
                                    <option value="1ºSGT-PM" @if($u->identificacao =='1ºSGT-PM') selected @endif>1ºSGT-PM</option>
                                    <option value="2ºTEN-PM" @if($u->identificacao =='2ºTEN-PM') selected @endif>2ºTEN-PM</option>
                                    <option value="1ºTEN-PM" @if($u->identificacao =='1ºTEN-PM') selected @endif>1ºTEN-PM</option>
                                    <option value="CAP-PM" @if($u->identificacao =='CAP-PM') selected @endif>CAP-PM</option>
                                    <option value="MAJ-PM" @if($u->identificacao =='MAJ-PM') selected @endif>MAJ-PM</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Usuário</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome de Usuário" value="{{ $u->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" value="{{ $u->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Matrícula</label>
                                <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matrícula" value="{{ $u->matricula }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nível</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="nivel" id="nivel">
                                    <option value="Atendente" @if($u->nivel=='Atendente')selected @endif >Atendente</option>
                                    <option value="Despachador" @if($u->nivel=='Despachador')selected @endif>Despachador</option>
                                    <option value="Supervisor" @if($u->nivel=='Supervisor')selected @endif>Supervisor</option>
                                    <option value="Administrador" @if($u->nivel=='Administrador')selected @endif>Administrador</option>
                                    <option value="Chefe operacional" @if($u->nivel=='Chefe operacional')selected @endif>Chefe operacional</option>
                                    <option value="Administrador master" @if($u->nivel=='Administrador master')selected @endif>Administrador master</option>
                               </select>
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
