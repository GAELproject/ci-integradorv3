<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>

<div class="main-content container-fluid">

	<div class="section__content section__content--p30">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-sm-12">
				<div class="overview-wrap">
					<h2 class=""><?=$pagina; ?></h2>
				
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
					<div class="alert alert-danger" role="alert">
						<?= $this->session->flashdata('error');?>
					</div>
				<?php }?>
			<a class="btn btn-success" style="margin-bottom: 10px;" href="<?= base_url('index.php/OS/formcadastrar')?>">Adicionar OS</a>
				<section class="panel">
			
			<div class="table-responsive table--no-card m-b-30">

	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th><i class=""></i>Responsável</th>
	                    <th><i class=""></i>Equipamento</th>
						<th><i></i>Número da OS</th>
						<th><i></i>Dados do Cliente</th>  
						<th><i class=""></i>Data de criação</th>
						<th width="120px">Ações</th>
						
	                  </tr>
	                  <?php foreach ($OS as $o) {?>
	                  <tr>
											<td><?php 
													foreach ($usuarios as $us) {
															if($us->id_usuario == $o->responsavel){
																		
																		echo $us->u_nome;
															}
												}	
											?>
											</td>
											<td><?php  
												foreach ($equipamentos as $eq) {
														if($eq->id_equipamento == $o->equipamento_id){
																		?>
																		<strong>Nome:</strong>
																		<?php 
																echo $eq->equipamento_nome;
																echo "<br>";

																?>
																	<strong>
																	Número de série:</strong>
																<?php 
																echo $eq->numero_serie;
																
														}
												}
												?>
											</td>
						<td><?php echo $o->numero_OS;?></td>
						<td>
						
							
							<strong>CPF:</strong>
							
						<?php echo $o->cpf_cliente;
							?>
							<br>
							<strong>Nome:</strong>
							<?php
							echo $o->cliente_nome;
							?>
							<br>
							<strong>Telefone:</strong>
							<?php
							echo $o->cliente_numero_telefone;
							?>
							<br>
							<strong>E-mail:</strong>
							<?php
							echo $o->cliente_email;
							?>
											
						</td>
						<td><?php echo $o->data_criacao?></td>
						<td><a class="btn btn-warning" href="<?php echo base_url('index.php/OS/editar/') . $o->id_os; ?>"><i class="fas fa-edit"></i></a>
						<a class="btn btn-danger" href="<?php echo base_url('index.php/OS/deletar/') . $o->id_os; ?>"><i class="fas fa-trash"></i></a></td>
	                  </tr>
	              	<?php } ?>
	                </tbody>
	              </table>
	         </div>


			    </section>
			</div>
</div>	


<?php $this->load->view('footer') ?>