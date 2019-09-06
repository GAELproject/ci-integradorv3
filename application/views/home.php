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
          <div class="card-header">GAEL - Gerenciamento</div>
          <div class="card-body">
            <h5 class="card-title">Gerenciar Metas</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo base_url('gael/gerenciar_meta')?>" class="btn btn-primary">Gerenciar metas</a>
          </div>
        </div>

        <div class="card text-center">
          <div class="card-header">GAEL - Gerenciamento</div>
          <div class="card-body">
            <h5 class="card-title">Gerenciar Equipamentos</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo base_url('gael/gerenciar_equipamento')?>" class="btn btn-primary">Gerenciar equipamentos</a>
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






<!-- FIM DA PRIMEIRA COLUNA-->


          <!---#############################3
            SEGUNDA COLUNA DO PRIMERIO ROW-->
          
            <!--fim do painel-->
          </div>
        </div>

        <!--fim da primeira row-->

        <!-- statics end -->


<!--INÍCIO DA SEGUNDA LINHA - ROW-->

        <!-- project team & activity start -->

            <!--fim da primeira coluna-->
          <!--início da segunda coluna-->

        <!--fim do painei-->
            </div>
            <!--fim da segunda coluna-->
          </div>


<!--FIM DA SEGUNDA ROW -->






<?php $this->load->view('footer') ?> 