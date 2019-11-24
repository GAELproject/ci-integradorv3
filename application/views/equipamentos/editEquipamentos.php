<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>




<div class="main-content container-fluid">

	<div class="section__content section__content--p30">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="overview-wrap">
					<h2 class=""><?= $pagina; ?></h2>
				
				</div>
			</div>
		</div>
	</div>

<a href="<?= base_url('index.php/equipamento/index');?>"> <i class="fa fa-arrow-left"></i> Visualizar todos os equipamentos</a>
<div class="row">

<div class="col-sm-8">
    <!--conteúdo do segundo grid-->
    <div  class="panel panel-default">
        <div class="panel-heading">
            
                      <div class="clearfix"></div>
        </div>
        <div id="painel1" class="panel-body">
            <div class="padd">
                <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/equipamento/atualizar/')?>">
                    <input type="hidden" name="id_equipamento" value="<?= $equipamento->id_equipamento;?>">
                        <!-- título do equipamento -->
                        <div class="form-group">    
                            <label class="control-label col-lg-5" for="nome">Nome do equipamento</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="nome" name="equipamento_nome" type="text" value="<?= $equipamento->equipamento_nome; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-5" for="numero_serie">Número de serie</label>
                            <div class="col-lg-10"> 
                                <input class="form-control" name='numero_serie' id="input" type="text" value="<?= $equipamento->numero_serie; ?>">
                            </div>
                        </div>
                         <!-- situação do equipamento-->
                         <div class="form-group">
                            <label class="control-label col-lg-2">Situação</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="situacao">
                                    <option value="1" <?php 
                                        if($equipamento->situacao == "1"){ echo "selected";}?>>Consertado </option>
                                    <option value="2"  <?php 
                                        if($equipamento->situacao == "2"){ echo "selected";}?>>Partcialmente consertado</option>
                                    <option value="3"  <?php 
                                        if($equipamento->situacao == "3"){ echo "selected";}?>>Não consertado</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="marca">Marca</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="marca" id="marca" value="<?= $equipamento->marca;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2" for="modelo">Modelo</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" type="text" name="modelo" value="<?= $equipamento->modelo; ?>">
                            </div>
                        </div>
                    
                    
                    <!-- Foi entregue?-->
                        
                        <div class="form-group">
                            <label class="control-label col-lg-7">Foi entregue ao cliente?</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="entregue">
                                    <option value="0" <?php 
                                        if($equipamento->entregue == "0")
                                            { echo "selected";}
                                            ?>> Não 
                                    </option>
                                    <option value="1"  <?php 
                                        if($equipamento->entregue == "1"){ echo "selected";}?>>Sim
                                    </option>
                                   
                                </select>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="form-group">
                            <!-- Buttons -->
                            <div class="col-lg-offset-2 col-lg-9">
                                <button type="submit" class="btn btn-success" title="cadastrar">
                                    Atualizar equipamento
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--fim do painel-->
</div>
    <div class="col-sm-4">

    </div>
</div>

</div>
<?php $this->load->view('footer') ?>


