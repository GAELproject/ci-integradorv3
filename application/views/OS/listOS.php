<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>

	<div class="row">
			<div class="col-lg-12"> 
				<?php if(isset($success)){?>
					<div class="alert alert-success" role="alert">
						<?php echo $success;?>
					</div>
				<?php }elseif(isset($error)){?>
					<div class="alert alert-success" role="alert">
  						<?= $error?>
					</div>
				<?php }?>
				<a class="btn btn-primary" href="<?= base_url('index.php/gael/gerenciar_os/inserir')?>">Adicionar OS</a>
				<section class="panel">

	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th><i class=""></i>Responsável</th>
	                    <th><i class=""></i>Equipamento</th>
                      <th><i></i>Número OS</th>
											<th><i class=""></i>Data de criação</th>
	                  </tr>
	                  <?php foreach ($OS as $key => $met) {
	                  	?>
	                  <tr>
	                    <td><?php echo $met->responsavel;?></td>
	                    <td><?php echo $met->equipamento_id;?></td>
											<td><?php echo $met->numero_OS;?></td>
											<td><?php echo $met->cpf_cliente;?></td>
									<td>
								<?php 
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
	                        	<i class="fa fa-trash-o"></i>
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
	            </section>
			</div>
		</div>


<?php $this->load->view('footer') ?>