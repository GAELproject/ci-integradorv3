<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>




<div class="main-content container-fluid">

<div class="section__content section__content--p30">
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class=""><?=$pagina; ?></h2>
            
            </div>
        </div>
    </div>
</div> 

        <!--caso não insira no database-->
        <div class="row">
   
          
    <div class="col-sm-10">
        <div  class="panel panel-default">
         
            <div id="painel" class="panel-body">
                <div class="padd">

                    <div class="form quick-post">
                        <!-- Edit profile form (not working)-->


                        <!--formulário de inserção-->
                        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/usuario/atualizar')?>">
                            <!-- Title -->
                            <input type="hidden" name="id_usuario" value="<?= $id_usuario; ?>">
                            <div class="form-group">
                                <label class="control-label col-lg-7" for="title">Nome</label>
                                <div class="col-lg-10">
                                    
                                    <input class="form-control" id="title" name="u_nome" type="text" value="<?= $usuarios->u_nome;?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-lg-7" for="title">Email</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="title" name="u_email" type="text" value="s<?= $usuarios->u_email;?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-7" for="title">Senha</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="title" type="text" name="senha" value="<?= $usuarios->senha;?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-lg-7" for="title">CPF</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="title" type="text" name="cpf" value="<?= $usuarios->cpf;?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-7">Tipo de usuário</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="usuario_tipo">
                                       
                                        <option value="1" <?php if($usuarios->usuario_tipo==1){echo "selected";} ?>>Administrador</option>
                                        <option value="2" <?php if($usuarios->usuario_tipo==2){echo "selected";} ?>>Bolsista</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!--1 - É BOLSISTA (sim) 2 - NÃO É BOLSISTA (não)-->
                            <div class="form-group">
                                <label class="control-label col-lg-7">Bolsista</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="usuario_bolsista">
                                    <option value="1" <?php if($usuarios->usuario_bolsista==1){echo "selected";} ?>>Sim</option>
                                      <option value="2" <?php if($usuarios->usuario_bolsista==2){echo "selected";} ?>>Não</option>
                                    </select>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="control-label col-lg-7">Turno</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="turno_atividades">
                                    <option value="1" <?php if($usuarios->turno_atividades=="1"){echo "selected";} ?>>Manhã</option>
                                    <option value="2" <?php if($usuarios->turno_atividades=="2"){echo "selected";} ?>>Tarde</option>
                                    <option value="3" <?php if($usuarios->turno_atividades=="3"){echo "selected";} ?>>Noite</option>
                                    </select>
                                </div>
                            </div>
                            

                            <!-- Tags -->

                            <!-- Buttons -->
                            <div class="form-group">
                                <!-- Buttons -->
                                <div class="col-lg-offset-2 col-lg-9">
                                    <button type="submit" class="btn btn-success">
                                        Editar usuário
                                    </button>
                                    <a class="btn btn-success" href="<?php echo base_url('index.php/usuario/index/')?>">Visualizar usuários
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
        <div class="col-sm-2">

        </div>
    </div>
</div>
<?php $this->load->view('footer') ?>

</div>

