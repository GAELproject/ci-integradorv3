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

        <div class="card text-center">
          <div class="card-header">GAEL - Gerenciamento</div>
          <div class="card-body">
            <h5 class="card-title">Gerenciar Usuários</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo base_url('gael/gerenciar_usuario')?>" class="btn btn-primary">Gerenciar Usuários</a>
          </div>
        </div>

        <div class="card text-center">
          <div class="card-header">GAEL - gerenciar usuário</div>
          <div class="card-body">
            <h5 class="card-title">Gerenciar Metas</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo base_url('index.php/gael/metas')?>" class="btn btn-primary">Gerenciar metas</a>
          </div>
        </div>

        <div class="card text-center">
          <div class="card-header">GAEL - gerenciar metas</div>
          <div class="card-body">
            <h5 class="card-title">Gerenciar Equipamentos</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo base_url('equipamento/index')?>" class="btn btn-primary">Gerenciar equipamentos</a>
          </div>
        </div>

        <div class="card text-center">
          <div class="card-header">GAEL - Gerenciamento</div>
          <div class="card-body">
            <h5 class="card-title">Realizar atividade em equipamento   </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo base_url('gael/realizar_equipamento')?>" class="btn btn-primary">Realizar equipamentos</a>
          </div>
        </div>








<?php $this->load->view('footer') ?> 