<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>        

        <div class="row">
          <div class="col-md-6">
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar equipamento</div>
                <div class="widget-icons pull-right">
                  <a id="seletor-down2" href="#">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <a href="#" id="seletor-up2" >
                    <i id="" class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="painel2" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/meta/salvar/')?>">
                      <!-- título da meta -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Inciar Ordem de Serviço:
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" name="n_OS" type="text">
                            </div>
                      </div>

                      <!-- Content -->

                      <!--usuário bolsista-->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Usuario responsável</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="usuario_id_usuario">
                            <option value="">- Selecione o usuário-</option>
                            
                            <?php
                            foreach ($usuarios as $key => $user) { ?>
                                <option value="<?php echo $user->id_usuario;?>">
                                  <?php echo $user->nome;?>
                                </option>
                            <?php }?>
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Nome do equipamento
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" name="nome_equipamento" type="text">
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Marca
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" name="marca" type="text">
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Modelo
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" name="modelo" type="text">
                            </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Número de série
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="text" name="n_serie" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2">Situação</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="situacao">
                            <option value="">- Selecione o usuário-</option>
                            <option value="1">Não consertado</option>
                            <option value="2">Consertado</option>
                            <option value="3">Parcialemente consertado</option>
                          </select>
                          </div>
                        </div>



                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">O que fará no equipamento
                        </label>                        
                        <div class="col-lg-10">
                          <select class="form-control" name="">
                            <option  id="clique-default" value="" selected="">- O que deseja fazer-</option>
                            <option id="clique-conserto"value="">Conserto</option>
                            <option  id="clique-laudo" value="">Laudo</option>
                            <option id="clique-doacao" value="">Doação</option>
                          </select>
                          </div>
                        </div>
                          </div>
                      <div id="doacao">
                      <div id="" class="form-group">
                        <label class="control-label col-lg-2" for="title">Nome do doador
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="text" name="nome_doador" type="text">
                        </div>
                      </div>
                      </div>
                    <div id="conserto">
                      <div id="" class="form-group">
                        <label class="control-label col-lg-2" for="title">Nome do cliente
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="text" name="cliente" type="text">
                        </div>
                      </div>
                      </div>
                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
                            Cadastrar equipamento
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/equipamentos')?>" title="metas">Exibir equipamentos</a>
                         
                        </div>
                      </div>
                    </form>
                  </div>


                </div>

              </div>
            </div>

            <?php $this->load->view('footer') ?>