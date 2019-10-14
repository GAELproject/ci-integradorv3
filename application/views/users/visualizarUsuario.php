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

<div class="row">
    <div class="col-md-1">

    </div>
    <?php if (isset($error)) {

        ?>
        <!--caso não insira no database-->
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
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
    <div class="col-md-10">
        <div  class="panel panel-default">
            <div class="panel-heading">
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
                        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/usuario/atualizar')?>">
                            <!-- Title -->
                            <input type="hidden" name="id_usuario" value="<?= $id_usuario; ?>">
                            
                           
                            <strong>Nome:</strong>
                            <?php echo $usuarios->u_nome;?> 
                            <br>
                            <strong>email:</strong>
                            <?php echo $usuarios->u_email;?> 
                            <br>
                            <strong>CPF:</strong>
                            <?php echo $usuarios->cpf;?> 
                            <br>
                            <strong>Tipo de usuário:</strong>
                            <?php if($usuarios->usuario_tipo==1){echo "Administrador";} ?>
                            
                            <?php if($usuarios->usuario_tipo==2){echo "Bolsista";} ?>
         
                            <br>
                            <strong>Turno:</strong>
                            <?php if($usuarios->turno_atividades==1){echo "Manhã";} ?>
                            <?php if($usuarios->turno_atividades==2){echo "Tarde";} ?>
                            <?php if($usuarios->turno_atividades==1){echo "Noite";} ?>
                            
                            
                            <br>
                           
                            

                            <!-- Buttons -->
                            <div class="form-group">
                                <!-- Buttons -->
                                <div class="col-lg-offset-2 col-lg-9">
                                    <button type="submit" class="btn btn-primary">
                                        Editar usuário
                                    </button>
                                    <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/user/')?>">Visualizar usuários
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>

<?php $this->load->view('footer') ?>

</div>

