<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>


<!-- MAIN CONTENT-->
<div class="main-content">
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
        <?php } ?>

        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-md-12">
                  
                        <div class="overview-wrap">
                            <h2 class="title-1"><i class="fas fa-tachometer-alt"></i> <?= $pagina; ?></h2>
                        </div>
                        <hr>
                        <?php if(isset($metas_vinculadas)){
                            foreach($metas as $meta){
                                foreach($metas_vinculadas as $my_metas){
                                    if($meta->id_meta == $my_metas->meta_id && $meta->situacao == "1") {   ?>
                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading">Atenção!</h4>
                                            <p>Você foi vinculado a meta: <?= $meta->titulo?>.</p>
                                            <p><strong>Criador:</strong>
                                                <?php  if(isset($usuarios)){ 
                                                    foreach($usuarios as $usuario){
                                                        if($meta->id_criador == $usuario['id_usuario']){
                                                            echo $usuario['u_nome'];
                                                        }
                                                        } 
                                                    }
                                                ?>
                                            </p>
                                            <hr>
                                            <p class="mb-0"><?= $meta->descricao;?></p>
                                        </div>
                                <?php }
                                }
                             }
                         }?>
                    </div>
                </div>
            </div>
            <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '1'){ ?>
             <!--início do container-->
                <div class="container">
                   <!--INÍCIO PRIMEIRA ROW-->
                    <div class="row mb-5">
                        <!-- início do primerio card -->
                            <div class="col-sm-4">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Gerenciar Usuários</h5>
                                        <a href="<?php echo base_url('index.php/usuario/index') ?>" class="btn btn-outline-success">Gerenciar Usuários</a>
                                    </div>
                                </div>
                            </div>
                            <!--fim do primeiro card-->
                         <!-- início do segundo card -->
                            <div class="col-sm-4">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciar Metas</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Gerenciar Metas</h5>
                                        <a href="<?php echo base_url('index.php/gael/metas') ?>" class="btn btn-outline-success">Gerenciar metas</a>
                                    </div>
                                </div>
                            </div>
                                   <!--fim do segundo card-->
                          <!--início do terceiro card-->

                            <div class="col-sm-4">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Gerenciamento de equipamentos </h5>
                                        <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar equipamentos</a>
                                    </div>
                                </div>
                            </div>
                            <!--fim do terceiro card-->
                    </div>
                </div>
                <!--fim do container-->
            <?php } ?>
            <!--INÍCIO SEGUNDA ROW-->
            <div class="container">

                <div class="row">
                        <!--início do quarto card-->
                        <div class="col-sm-4">
                            <div class="card text-center h-100">
                                <div class="card-header">GAEL - atividades em equipamento</div>
                                <div class="card-body">
                                    <h5 class="card-title">Realizar atividade em equipamento </h5>
                                    <a href="<?php echo base_url('index.php/realizar_atividade_equipamento/index') ?>" class="btn btn-outline-success col-12">Realizar atividade</a>
                                </div>
                            </div>
                        </div>
                        <!--fim do quarto card-->
                    
                            <!--início do sexto card-->
                            <div class="col-sm-4">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Ordens de serviço</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Realizar atividade em OS </h5>
                                        <a href="<?php echo base_url('index.php/OS/index')?>" class="btn btn-outline-success">Gerenciar OS</a>
                                    </div>
                                    </div>
                            </div>
                        <!--fim do sexto card-->
                   
                    <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '1') : ?>
                        <div class="col-sm-4">
                            <!--início do quinto card-->
                            <div class="card text-center h-100">
                                <div class="card-header">GAEL - Relatórios</div>
                                <div class="card-body">
                                    <h5 class="card-title">Visualizar relatórios de atividades</h5>
                                    <a href="<?php echo base_url('index.php/gael/home') ?>" class="btn btn-outline-success">Gerenciar</a>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '2') : ?>
                      <!--início do quarto card-->
                             <div class="col-sm-4">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Gerenciamento de equipamentos </h5>
                                        <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar equipamentos</a>
                                    </div>
                                </div>
                            </div>
                            <!--fim do quarto card-->

                        <?php endif;?>
                        
                </div>

                <!--FIM SEGUNDA ROW-->
            </div>
        </div>
    </div>
 
</div>

</div>
<?php $this->load->view('footer') ?>