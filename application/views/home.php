<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>


<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="row">
        <div class="section__content section__content--p30"  >
            <div class="container" style="width: 80%;">
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
                <div class="container" style="width:80%;" >
                   <!--INÍCIO PRIMEIRA ROW-->
                    <div class="row mb-5">
                        <!-- início do primerio card -->
                            <div class="col-sm-4 card-boots ">
                                <div class="card  text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento de usuários
                                    </div>
                                    <div class="card-body">
                                        
                                        <a href="<?php echo base_url('index.php/usuario/index') ?>" class="btn btn-outline-success">Gerenciar</a>
                                    </div>
                                </div>
                            </div>

                            <!--fim do primeiro card-->
                         <!-- início do segundo card -->
                            <div class="col-sm-4 card-boots ">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciar Metas
                                    </div>
                                    <div class="card-body">
                                        
                                        <a href="<?php echo base_url('index.php/gael/metas') ?>" class="btn btn-outline-success">Gerenciar</a>
                                    </div>
                                </div>
                            </div>
                                   <!--fim do segundo card-->
                          <!--início do terceiro card-->

                            <div class="col-sm-4 card-boots">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento de equipamentos 
                                     </div>
                                    <div class="card-body">
                                        
                                        <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar</a>
                                    </div>
                                </div>
                            </div>
                            <!--fim do terceiro card-->

                            
                    </div>
                    <!--fim row-->
                </div>
                <!--fim do container-->
            <?php } ?>
            <!--INÍCIO SEGUNDA ROW-->
            <div class="container"  style="width:80%;">

                <div class="row" >
                        <!--início do quarto card-->
                        <div class="col-sm-4 card-boots">
                            <div class="card text-center h-100">
                                <div class="card-header">GAEL - atividades em equipamento</div>
                                <div class="card-body">
                                    <a href="<?php echo base_url('index.php/realizar_atividade_equipamento/index') ?>" class="btn btn-outline-success col-12">Realizar </a>
                                </div>
                            </div>
                        </div>
                        <!--fim do quarto card-->
                    
                            <!--início do sexto card-->
                            <div class="col-sm-4 card-boots">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento de ordens de serviço</div>
                                    <div class="card-body">
                                        
                                        <a href="<?php echo base_url('index.php/OS/index')?>" class="btn btn-outline-success">Gerenciar</a>
                                    </div>
                                    </div>
                            </div>
                        <!--fim do sexto card-->
                   
                    <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '1') : ?>
                        <div class="col-sm-4 card-boots">
                            <!--início do quinto card-->
                            <div class="card text-center h-100">
                                <div class="card-header">GAEL - Gerenciamento de equipamentos - <strong> laudos</strong></div>
                                <div class="card-body">
                                    
                                    <a href="<?php echo base_url('index.php/laudo/index') ?>" class="btn btn-outline-success">Gerenciar</a>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '2') : ?>
                      <!--início do quarto card-->
                             <div class="col-sm-4 card-boots">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento de equipamentos </div>
                                    <div class="card-body">
                                        
                                        <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar </a>
                                    </div>
                                </div>
                            </div>
                            <!--fim do quarto card-->

                        <?php endif;?>
                        
                </div>

                <!--FIM SEGUNDA ROW-->
                    
                <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '1') : ?>
                    
                    <div class="row">
                        <!--início do quarto card-->
                        <div class="col-sm-4 card-boots">
                                <div class="card text-center h-100">
                                    <div class="card-header">GAEL - Gerenciamento de equipamentos <strong> - doações </strong></div>
                                    <div class="card-body">
                                        
                                        <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar </a>
                                    </div>
                                </div>
                            </div>
                            <!--fim do quarto card-->
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>

                    </div>    
                    
                    
                <?php endif;?>

                         <?php if ($this->session->userdata('usuario_logado')['usuario_tipo'] == '2') : ?>
                      <!--início do quarto card-->
                            <div class="row">
                                <div class="col-sm-4 card-boots">
                                    <div class="card text-center h-100">
                                        <div class="card-header">GAEL - Gerenciamento de equipamentos <strong> - laudos</strong></div>
                                        <div class="card-body">
                                            
                                            <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <div class="card text-center h-100">
                                        <div class="card-header">GAEL - Gerenciamento de equipamentos <strong> - doações  </strong></div>
                                        <div class="card-body">
                                            
                                            <a href="<?php echo base_url('index.php/equipamento') ?>" class="btn btn-outline-success">Gerenciar </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <!--fim do quarto card-->

                        <?php endif;?>


            </div>
            <!--fim do segundo container-->



        </div>
    </div>
 
</div>

</div>
<?php $this->load->view('footer') ?>