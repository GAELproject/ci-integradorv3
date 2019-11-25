<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>



<div class="main-content container-fluid">

<div class="section__content section__content--p30">
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1"><?=$pagina; ?></h2>
            
            </div>
        </div>
    </div>
</div>
<!--início row-->
<div class="row">


<div class="col-sm-10">
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left"> <!--aqui pode ficar um  título--></div>
               
                <div class="clearfix"></div>
              </div>
              <div id="painel" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->


                    <!--formulário de inserção-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/usuario/salvar/')?>">

                    <!--Usuario-->

                    
                    <!-- Content-->
                      <div class="form-group">
                        <label class="control-label col-lg-7" for="title">Nome</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="title" name="u_nome" type="text">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-lg-7" for="title">Email</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="title" name="u_email" type="email">
                          </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-lg-7" for="title">Senha</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="title" type="text" name="senha">
                        </div>
                      </div>
                      
                      <div class="form-group">
                      <label class="control-label col-lg-7" for="title">CPF</label>
                        <div class="col-lg-10">
                          <input class="form-control" id="title" type="text" name="cpf">
                        </div>
                      </div>

                    <!--Tipo de Usuario-->
                     <div class="form-group">
                        <label class="control-label col-lg-7">Tipo de usuário</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="usuario_tipo">
                              <option value="" selected disabled>- Tipo -</option>
                              <option value="1">Adminstrador</option>
                              <option value="2">bolsista</option>
                            </select>
                          </div>
                      </div>
                      
                      <!--Usuario Bolsista-->
                      <div class="form-group">
                        <label class="control-label col-lg-7">Bolsista remunerada?</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="usuario_bolsista">
                            <option value="" selected disabled>- Selecione -</option>
                            <option value="1   ">Sim</option>
                            <option value="2">Não</option>
                          </select>
                        </div>
                      </div>

                      <!--Turno-->
                      <div class="form-group">
                        <label class="control-label col-lg-7">Turno</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="turno_atividades">
                            <option value="" selected disabled>- Escolha seu turno -</option>
                            <option value="1">Manhã</option>
                            <option value="2">Tarde</option>
                            <option value="3">Noite</option>
                          </select>
                        </div>
                      </div>

                      

                      <!-- Tags -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-success">
                            Cadastrar
                          </button>
                          <a class="btn btn-success" href="<?php echo base_url('index.php/usuario/index')?>">Visualizar usuários
                          </a>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>

              </div>
            </div>
          </div>
          <!--fim do grid de 8-->
<div class="col-sm-2">
</div>

</div>
<!--fim row-->

</div>  
<?php $this->load->view('footer') ?> 