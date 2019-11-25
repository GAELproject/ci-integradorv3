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
				<a class="btn btn-success mb-3" href="<?= base_url('index.php/doacao/formDoacaoAdd')?>">Adicionar nova doação</a>
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
					  <?php foreach($doacoes as $doa){?>
	                  <tr>
                        <td> 
						
                                    
                          
                        </td>
                        <td>
                         
                        </td>
                        <td>
                          
                        </td>
                        <td width="800px">
                            <a class="btn btn-warning" href="<?= base_url('index.php/doacao/edit/');?>"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="<?= base_url('index.php/doacao/delete/');?>"><i class="fas fa-trash"></i></a>
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