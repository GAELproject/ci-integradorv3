<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>
	

<?php if(isset($sucess)){ ?>
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10">
			<div class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                       <i class="fa fa-times-circle"></i>
                    </button>
                <strong>Usuário inserido com sucesso!</strong>
            </div>
		</div>
		<div class="col-sm-1">
		</div>
	</div>
<?php } ?>
	<!--início da row-->
	<div class="row">
		<div class="col-lg-12"> 
			<section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i>Nome</th>
                    <th><i class="icon_calendar"></i>Tipo de usuário</th>
                    <th><i class="icon_mail_alt"></i>Login</th>
                    <th><i class="icon_pin_alt"></i>Senha</th>
                    <th><i class="icon_mobile"></i>Email</th>
                    <th><i class="icon_cogs"></i> Bolsista</th>
                    <th><i class=""></i>Ações</th>
                  </tr>
                  <?php foreach ($usuarios as $key => $us) {
                  	?>
                  <tr>
                    <td><?php echo $us->nome;?></td>
                    <td><?php echo $us->tipo;?></td>
                    <td><?php echo $us->login;?></td>
                    <td><?php echo $us->senha;?></td>
                    <td><?php echo $us->email;?></td>
                    <td><?php echo $us->usuario_bolsista;?></td>
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
	<!--fim da row-->
<?php $this->load->view('footer') ?>

