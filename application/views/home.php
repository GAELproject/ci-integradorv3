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
            <!--início do container-->
    <div class="container-fluid">
      <!--início da row-->
      <div class="row mb-5">

        <div class="col-sm-2">
        </div>
        <div class="col-sm-4">
              <!-- início do primerio card -->
          <div class="card text-center">
            <div class="card-header">GAEL - Gerenciamento</div>
            <div class="card-body">
              <h5 class="card-title">Gerenciar Usuários</h5>
              <p class="card-text">Seção destinada para adminsitradores para adiconar, exlcuir e editar usuários</p>
              <a href="<?php echo base_url('gael/gerenciar_usuario')?>" class="btn btn-primary">Gerenciar Usuários</a>
            </div>
          </div>
              <!--fim do primeiro card-->
        </div>
        <div class="col-sm-4">   
        <!-- início do segundo card -->
          <div class="card text-center">
            <div class="card-header">GAEL - Gerenciar Metas</div>
            <div class="card-body">
              <h5 class="card-title">Gerenciar Metas</h5>
              <p class="card-text">Seção destinada para adminsitradores para adiconar, exlcuir e editar metas</p>
              <a href="<?php echo base_url('index.php/gael/metas')?>" class="btn btn-primary">Gerenciar metas</a>
            </div>
          </div>
          <!--fim do segundo card-->
        </div>
        <div class="col-sm-2"></div>

      </div>
      <!--fim da primeira row-->


      <!--início da segunda row-->
            <div class="row mb-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                  <!--início do quinto card-->
                    <div class="card text-center">
                      <div class="card-header">GAEL - Gerenciamento</div>
                      <div class="card-body">
                        <h5 class="card-title">Gerenciamento de equipamentos  </h5>
                        <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir equipamentos.</p>
                        <a href="<?php echo base_url('gael/realizar_equipamento')?>" class="btn btn-primary">Realizar equipamentos</a>
                      </div>
                    </div>
                </div>
                <!--fim do quinto card-->
                <div class="col-sm-4">
                <!--início do sexto card-->
                 <div class="card text-center">
                    <div class="card-header">GAEL - atividades em equipamento</div>
                    <div class="card-body">
                      <h5 class="card-title">Realizar atividade em equipamento </h5>
                      <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir atividades.</p>
                      <a href="<?php echo base_url('index.php/realizar_atividade_equipamento/index')?>" class="btn btn-primary">Realizar atividades em um equipamento</a>
                    </div>
                  </div>
                  <!--fim do sexto card-->
                </div>
                <div class="col-sm-2"></div>
            </div>

      <!--fim da segunda row-->

     <!--início da terceira row-->
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                  <!--início do quinto card-->
                    <div class="card text-center">
                      <div class="card-header">GAEL - Gerenciamento</div>
                      <div class="card-body">
                        <h5 class="card-title">Gerenciamento de equipamentos  </h5>
                        <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir equipamentos.</p>
                        <a href="<?php echo base_url('gael/realizar_equipamento')?>" class="btn btn-primary">Realizar alsjfhasfjksf</a>
                      </div>
                    </div>
                </div>
                <!--fim do quinto card-->
                <div class="col-sm-4">
                <!--início do sexto card-->
                 <div class="card text-center">
                    <div class="card-header">GAEL - Ordens de serviço</div>
                    <div class="card-body">
                      <h5 class="card-title">Realizar atividade em OS </h5>
                      <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir ordens de serviço.</p>
                      <a href="<?php echo base_url('OS/index')?>" class="btn btn-primary">Gerenciar OS</a>
                    </div>
                  </div>
                  <!--fim do sexto card-->
                </div>
                <div class="col-sm-2"></div>
            </div>

      <!--fim da terceira row-->


    </div>
    <!--fim do caontainer-->
        










<?php $this->load->view('footer') ?> 