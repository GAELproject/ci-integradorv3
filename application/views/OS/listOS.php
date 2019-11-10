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
	<div class="col-sm-12"> 
				<?php if($this->session->flashdata('success')){?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->flashdata('success');?>
					</div>
				<?php }elseif(isset($error)){?>
					<div class="alert alert-success" role="alert">
  						<?= $error?>
					</div>
				<?php }?>
			<a class="btn btn-primary" style="margin-bottom: 10px;" href="<?= base_url('index.php/OS/formcadastrar')?>">Adicionar OS</a>
				<section class="panel">

	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th><i class=""></i>Responsável</th>
	                    <th><i class=""></i>Equipamento</th>
						<th><i></i>Número OS</th>
						<th><i></i>Dados do Cliente</th>  
						<th><i class=""></i>Data de criação</th>
						<th><i></i></th>
						<th><i></i></th>
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
																echo $eq->equipamento_nome;
																echo "<br>";
																echo $eq->numero_serie;
																
														}
												}
												?>
											</td>
						<td><?php echo $o->numero_OS;?></td>
						<td><?php echo "cpf: ".$o->cpf_cliente;
											echo "<br> nome:".$o->cliente_nome;
											echo "<br> telefone:".$o->cliente_numero_telefone;
											echo "<br> e-mail:".$o->cliente_email;
											?>
											
						</td>
						<td><?php echo $o->data_criacao?></td>
						<td><a class="btn btn-secondary" href="<?php echo base_url('index.php/OS/editar/') . $o->id_os; ?>">Editar</a></td>
						<td><a class="btn btn-danger" href="<?php echo base_url('index.php/OS/deletar/') . $o->id_os; ?>">Excluir</a></td>
	                  </tr>
	              	<?php } ?>
	                </tbody>
	              </table>
	            </section>
			</div>
</div>	


<?php $this->load->view('footer') ?>