

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
                <?php }?>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"><?= $pagina;?></h2>
                              
                                </div>
                            </div>
                        </div>
                <?php  if($this->session->userdata('usuario_logado')['usuario_tipo'] == '1'): ?>
                    <!--INÍCIO PRIMEIRA ROW-->
                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-4">
                             

                               <!-- início do primerio card -->
                                <div class="card text-center">
                                    <div class="card-header">GAEL - Gerenciamento</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Gerenciar Usuários</h5>
                                            <p class="card-text mb-2">Seção destinada para adminsitradores para adiconar, exlcuir e editar usuários</p>
                                                <a href="<?php echo base_url('index.php/usuario/index')?>" class="btn btn-outline-success">Gerenciar Usuários</a>
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
                                    <p class="card-text mb-2">Seção destinada para adminsitradores para adiconar, exlcuir e editar metas</p>
                                    <a href="<?php echo base_url('index.php/gael/metas')?>" class="btn btn-outline-success">Gerenciar metas</a>
                                    </div>
                                </div>
                                <!--fim do segundo card-->

                            </div>
                            
                            <div class="col-sm-2">

                            </div>
                        </div>
                        <!--FIM PRIMEIRA ROW-->
                             <?php endif;?>
                        <!--INÍCIO SEGUNDA ROW-->

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                     <!--início do terceiro card-->
                                     <div class="card text-center">
                                        <div class="card-header">GAEL - Gerenciamento</div>
                                        <div class="card-body">
                                            <h5 class="card-title">Gerenciamento de equipamentos  </h5>
                                            <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir equipamentos.</p>
                                            <a href="<?php echo base_url('index.php/equipamento')?>" class="btn btn-outline-success">Realizar equipamentos</a>
                                        </div>
                                        </div>

                                    <!--fim do terceiro card-->
                                </div>
                                <div class="col-sm-4">
                                <!--início do quarto card-->
                                    <div class="card text-center">
                                        <div class="card-header">GAEL - atividades em equipamento</div>
                                        <div class="card-body">
                                        <h5 class="card-title">Realizar atividade em equipamento </h5>
                                        <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir atividades.</p>
                                        <a href="<?php echo base_url('index.php/realizar_atividade_equipamento/index')?>" class="btn btn-outline-success">Realizar atividade</a>
                                        </div>
                                    </div>
                                    <!--fim do quarto card-->
                                </div>
                                <div class="col-sm-2">

                                </div>
                            </div>

                        <!--FIM SEGUNDA ROW-->
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                          <!--início do quinto card-->
                            <div class="card text-center">
                                <div class="card-header">GAEL - Gerenciamento</div>
                                <div class="card-body">
                                    <h5 class="card-title">Gerenciamento de equipamentos  </h5>
                                    <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir equipamentos.</p>
                                    <a href="<?php echo base_url('gael/realizar_equipamento')?>" class="btn btn-outline-success">Gerenciamento de equipamentos</a>
                                </div>
                                </div>
                            
                            <!--fim do quinto card-->
                            </div>
                            <div class="col-sm-4">
                            <!--início do sexto card-->
                                <div class="card text-center">
                                    <div class="card-header">GAEL - Ordens de serviço</div>
                                    <div class="card-body">
                                    <h5 class="card-title">Realizar atividade em OS </h5>
                                    <p class="card-text">Para gerenciadores, detinado a inciar, editar e excluir ordens de serviço.</p>
                                    <a href="<?php echo base_url('index.php/OS/index')?>" class="btn btn-outline-success">Gerenciar OS</a>
                                    </div>
                                </div>
                                <!--fim do sexto card-->
                            </div>
                            <div class="col-sm-2"></div>
                        </div>




                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018, <a target="_blank"href="https://github.com/GAELproject">GAEL.</a>  </p>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php $this->load->view('footer') ?>