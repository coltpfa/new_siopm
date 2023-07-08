<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('usuario/create')}}">
                {{csrf_field()}}

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Identificação</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="identificacao" id="identificacao">
                                    <option value="CIVIL">CÍVIL</option>
                                    <option value="SD-PM">SD-PM</option>
                                    <option value="CB-PM">CB-PM</option>
                                    <option value="3ºSGT-PM">3ºSGT-PM</option>
                                    <option value="2ºSGT-PM">2ºSGT-PM</option>
                                    <option value="1ºSGT-PM">1ºSGT-PM</option>
                                    <option value="2ºTEN-PM">2ºTEN-PM</option>
                                    <option value="1ºTEN-PM">1ºTEN-PM</option>
                                    <option value="CAP-PM">CAP-PM</option>
                                    <option value="MAJ-PM">MAJ-PM</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Nome de Usuário</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome de Usuário" >
                                <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>
                        </div>
                    </div>
                    <dic class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">E-mail</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" >
                                <div class="text-danger">{{$errors->first('email')}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Matrícula</label>
                                <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matrícula" >
                                <div class="text-danger">{{$errors->first('matricula')}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nível</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="nivel" id="nivel">
                                    <option value="Atendente">Atendente</option>
                                    <option value="Despachador">Despachador</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Chefe operacional">Chefe operacional</option>
                                    <option value="Administrador master">Administrador master</option>
                               </select>
                               <div class="text-danger">{{$errors->first('nivel')}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Senha</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Senha" >
                                <div class="text-danger">{{$errors->first('mypassword')}}</div>
                            </div>
                            <div class="form-group">
                                <label for="nome">Redigite a senha</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Redigite a senha" >
                                <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /.card-body -->

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
