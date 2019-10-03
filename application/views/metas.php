<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>


<div class="main-content container-fluid">

	<div class="section__content section__content--p30">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="overview-wrap">
					<h2 class="title-1"><?= $pagina; ?></h2>
				
				</div>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-sm-12"> 
				<?php if(isset($success)){?>
					<div class="alert alert-success" role="alert">
						<?php echo $success;?>
					</div>
				<?php }elseif(isset($error)){?>
					<div class="alert alert-success" role="alert">
  						<?= $error?>
					</div>
				<?php }?>
				<a class="btn btn-primary" href="<?= base_url('index.php/gael/gerenciar_meta')?>">Adicionar nova meta</a>
				<section class="panel">
	              <header class="panel-heading">
	                Metas
	              </header>
			<div class="table-responsive table--no-card m-b-30">
		
	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th><i class=""></i>Título</th>
	                    <th><i class=""></i>Descrição</th>
	                    <th><i class=""></i>Criador</th>
						<th><i class=""></i>Turno da meta</th>
						<th><i class=""></i>Data de criação</th>
						<th><i></i>Prazo de finalizacao</th>
	                    <th><i class=""></i>Data de finalização</th>
						
						<th><i></i>Situação</th>
						<th><i></i>Usuários envolvidos</th>
	                    <th><i class=""></i>Ações</th>
	                  </tr>
	                  <?php foreach ($metas as $key => $met) {
	                  	?>
	                  <tr>
	                    <td><?php echo $met->titulo;?></td>
	                    <td><?php echo $met->descricao;?></td>
						<td><?php 
									foreach ($usuarios as $usuario) {
										if($met->id_criador==$usuario->id_usuario){
											echo $usuario->u_nome;
										}
									}
						?>
						</td>
						<td>
							<?php if($met->turno == '1'){echo "matutino";
							} elseif($met->turno == '2'){echo "vespertino";}else{ echo "noturno";} ?> 
						</td>
						<td>
							<?php 
								$data = $met->data_criacao = implode("/", array_reverse(explode("-", $met->data_criacao)));

								echo $data;
							?>
						</td>
						
						<td>
						<?php 
							$newdata = $met->data_prazo_finalizacao = implode("/", array_reverse(explode("-", $met->data_prazo_finalizacao)));
							echo $newdata;
						?>
						</td>
						<td><?php
							$new = $met->data_finalizacao = implode("/", array_reverse(explode("-", $met->data_finalizacao)));

						echo $new;?>
						</td>
						<td>	
							<?php if($met->situacao == '0'){echo "não finalizado";} else{echo"finalizado";}?>
						</td>
	                    <td width="200px">
							
								<?php
									foreach ($usuarios as $usuario) {
										foreach ($usuario_tem_meta as $utm) {
											if($usuario->id_usuario==$utm->usuario_id &&
											 $utm->meta_id == $met->id_meta){
												echo $usuario->u_nome."<br>";
											}
										}
									}
								?>
							</td>
							<td width="200px">
	                      <div class="btn-group">
	                        <a title="editar" class="btn btn-success" href="<?php echo base_url('index.php/meta/editar/')?><?=$met->id_meta?>">
	                        	<i class="fa fa-edit"></i></a>
	                        <a title="excluir" class="btn btn-danger" href="<?php echo base_url('index.php/meta/deletar/')?><?=$met->id_meta?>">
	                        	

									<i class="zmdi zmdi-delete"></i>


							</a>
							<a title="visualizar meta" class="btn btn-warning" href="<?php echo base_url('index.php/meta/view/')?><?=$met->id_meta?>">
	                        	<i class="fa fa-eye"></i>
	                        </a>
	                      </div>
	                    </td>
	                  </tr>
	              	<?php } ?>
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