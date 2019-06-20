<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>

	<div class="row">
			<div class="col-lg-12"> 
				<section class="panel">
	              <header class="panel-heading">
	                Metas
	              </header>

	              <table class="table table-striped table-advance table-hover">
	                <tbody>
	                  <tr>
	                    <th><i class=""></i>Título</th>
	                    <th><i class=""></i>Descrição</th>
	                    <th><i class=""></i>Data de criação</th>
	                    <th><i class=""></i>Data de prazo</th>
	                    <th><i class=""></i>Data de finalização</th>
	                    <th><i class=""></i>Finalizado?</th>
	                    <th><i class=""></i>Ações</th>
	                  </tr>
	                  <?php foreach ($metas as $key => $met) {
	                  	?>
	                  <tr>
	                    <td><?php echo $met->titulo;?></td>
	                    <td><?php echo $met->descricao;?></td>
	                    <td><?php echo $met->data_criacao ;?></td>
	                    <td><?php echo $met->data_prazo_finalizacao;?></td>
	                    <td><?php echo $met->data_de_finalizacao;?></td>
	                    <td><?php echo $met->situacao_final;?></td>
	                    <td>
	                      <div class="btn-group">
	                        <a class="btn btn-success" href="<?php echo base_url('index.php/usuario/editar')?>">
	                        	<i class="fa fa-edit"></i></a>
	                        <a class="btn btn-danger" href="<?php echo base_url('index.php/usuario/deletar')?>">
	                        	<i class="fa fa-ban"></i>
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