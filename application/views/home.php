<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>


<!--######################################################################################################
##########################aqui começa a primeira row#######################################################
###########################################################################################################
-->

    

      <!--inicio da primeira row-->
        <div class="row">
          <?php if (isset($error)) {
            
          ?>
          <!--caso não insira no database-->
          <div class="row">
            <div class="col-sm-1">
              
            </div>
            <div class="col-sm-10">
              <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                  <i class="fa fa-times-circle"></i>
                </button>
                  <strong>Atenção!</strong> <?php echo $error; ?>
              </div>   
            </div>
            <div class="col-sm-1">
              
            </div>
          
          </div>
        <?php }?>
          <div class="col-md-6">
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar usuários</div>
                <div class="widget-icons pull-right">
                  <a id="seletor-down" href="#">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <a href="#" id="" class="">
                    <i id="seletor-up" class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="painel" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->


                    <!--formulário de inserção-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/usuario/salvar/')?>">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Nome</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="title" name="nome" type="text">
                        </div>
                      </div>
                    <!--tipo de usuário-->

                     <div class="form-group">
                        <label class="control-label col-lg-2">Tipo de usuário</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="tipo">
                              <option value="">- Tipo -</option>
                              <option value="1">master</option>
                              <option value="2">administrador - bolsista</option>
                            </select>
                          </div>
                      </div>

                      <!-- Content -->
                         <div class="form-group">
                                <label class="control-label col-lg-2" for="title">Email</label>
                                <div class="col-lg-10">
                                  <input class="form-control" id="title" name="email" type="text">
                                </div>
                          </div>


                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Login</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="login">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Senha</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="senha">
                          </div>
                        </div>
                      <!-- turno -->
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">CPF</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="cpf">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Imagem</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="text" name="imagem">
                          </div>
                        </div>
                      <!---->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Turno</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="turno">
                            <option value="">- Escolha seu turno -</option>
                            <option value="M">Manhã</option>
                            <option value="T">Tarde</option>
                            <option value="N">Noite</option>
                          </select>
                        </div>
                      </div>
                      <!--usuário bolsista-->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Bolsista</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="usuario_bolsista">
                            <option value="">- Selecione -</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Meta</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="meta_id_meta">
                            <option value="">- Está vinculado a uma meta? -</option>

                            <?php
                            foreach ($metas as $key => $met) {
                            ?>
                                <option value="<?php echo $met->id_meta;?>"><?php echo $met->titulo;?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>      

                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">
                            Cadastrar
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/user/')?>">Visualizar usuários
                          </a>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>
          </div>


<!-- FIM DA PRIMEIRA COLUNA-->


          <!---#############################3
            SEGUNDA COLUNA DO PRIMERIO ROW-->
          <div class="col-md-6">
            <!--conteúdo do segundo grid-->
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar metas</div>
                <div class="widget-icons pull-right">
                  <a id="seletor-down1" href="#">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <a href="#" id="seletor-up1" >
                    <i id="" class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="painel1" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/meta/salvar/')?>">
                      <!-- título da meta -->
                      <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Título da meta</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" name="titulo" type="text">
                            </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Descrição</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name='descricao' id="content"></textarea>
                        </div>
                       </div>
                      <!-- Content -->
                     <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Data do prazo</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" type="date" name="data_prazo_finalizacao">
                            </div>
                      </div>


                        <div class="form-group">
                          <label class="control-label col-lg-2" for="title">Data de finalização</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" type="date" name="data_de_finalizacao">
                          </div>
                        </div>
                      <!--usuário bolsista-->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Finalizado?</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="situacao_final">
                            <option value="">- Selecione o estado-</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                          </select>
                        </div>
                      </div>
                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
                            Cadastrar
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/metas')?>" title="metas">Exibir metas</a>
                         
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
            <!--fim do painel-->
          </div>
        </div>

        <!--fim da primeira row-->

        <!-- statics end -->


<!--INÍCIO DA SEGUNDA LINHA - ROW-->

        <!-- project team & activity start -->
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
            <!--fim da primeira coluna-->
          <!--início da segunda coluna-->
            <div class="col-md-6">
            <!--realizar atividade em equipamento-->  
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Realizar atividade em equipamento</div>
                <div class="widget-icons pull-right">
                  <a id="seletor-down3" href="#">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <a href="#" id="seletor-up3" >
                    <i id="" class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="painel3" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/meta/salvar/')?>">
                      <!-- título da meta -->

                     <div class="form-group">
                        <label class="control-label col-lg-2">Ordem de serviço</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="OS_id_OS">
                            <option value="" selected="">- selecione a OS referente-</option>
                            <option value="1">x ordem de serviço</option>
                          </select>
                          </div>
                        </div>  
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Nome do item substituido</label>
                        <div class="col-lg-10">
                              <input class="form-control" id="title" type="text" name="nome_item_substituido">
                        </div>
                       </div>
                      <!-- Content -->
                     <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Quntidade do item subsituido</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" type="number" name="quantidade_item_substituido">
                            </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
                            Cadastrar
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/metas')?>" title="metas">Exibir metas</a>
                         
                        </div>
                      </div>
                    </form>
                  </div>


                </div>

              </div>
            </div>
        <!--fim do painei-->
            </div>
            <!--fim da segunda coluna-->
          </div>


<!--FIM DA SEGUNDA ROW -->



        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>

          <div class="col-md-6 portlets">


          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      
      </div>
    </section>
    <!--main content end-->
  </section>



<?php $this->load->view('footer') ?> 