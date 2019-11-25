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

	<div class="row">
			<div class="col-sm-12"> 
				<?php if($this->session->flashdata('success')){?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->flashdata('success');?>
					</div>
				<?php }elseif($this->session->flashdata('error')){?>
					<div class="alert alert-success" role="alert">
  						<?= $this->session->flashdata('error');?>
					</div>
				<?php }?>
				<a class="btn btn-success mb-3" href="<?= base_url('index.php/laudo/formLaudoAdd')?>">Adicionar novo laudo</a>
				<section class="panel">
	           
			<div class="table-responsive table--no-card m-b-30">
		
	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th width="500px">Equipamento</th>
	                    <th width="800px">Possíveis defeitos</th>
	                    <th width="500px">Possíveis causas</th>
						<th>Possíveis soluções</th>
						<th>Data de entrega</th>
						<th>Cliente</th>
	                    <th width="800px">Destino</th>
						
	                    <th>Ações</th>
	                  </tr>
					  <?php foreach($laudos as $lau){?>
	                  <tr>
                        <td> 
								<?php
                                        foreach($equipamentos as $eq){
                                            if($lau->equipamento_laudo_id == $eq->id_equipamento){
                                                echo "<strong>Nome: </strong>".$eq->equipamento_nome;
                                                echo "<br>";
                                                echo "<strong>Número de série: </strong>".$eq->numero_serie;
                                                
                                            }
                                        }
                                        
                                    
                            ?>
                        </td>
                        <td>
                            <?= $lau->possiveis_defeitos;?>
                        </td>
                        <td>
                            <?= $lau->possiveis_causas;?>
                        </td>
                        <td>
                            <?= $lau->possiveis_solucoes;?>
                        </td>
                        <td>
                            <?= $lau->data_entrega;?>
                        </td>
                        <td>
                            <?= $lau->cliente;?>
                        </td>
                        <td>
                            <?= $lau->destino;?>
                        </td>
                        <td width="800px">
                            <a class="btn btn-warning" href="<?= base_url('index.php/laudo/edit/').$lau->id_laudo;?>"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="<?= base_url('index.php/laudo/delete/').$lau->id_laudo;?>"><i class="fas fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php }?>
	                </tbody>
				  </table>
		        	</div>
	            </section>
			</div>
		</div>
	</div>
</div>
<!--END MAIN CONTENT-->

<?php $this->load->view('footer') ?>