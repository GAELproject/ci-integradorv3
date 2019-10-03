<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>
	


  <div class="main-content container-fluid">

  <div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Página principal</h2>
              
                </div>
            </div>
        </div>
  </div>
	<div class="row">

		<div class="col-lg-12"> 
    <a class="btn btn-primary" href="<?= base_url('index.php/gael/gerenciar_usuario')?>">Adicionar um novo usuario</a>
			<section class="panel">
        

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
                    <td><?php echo $us->u_nome;?></td>
                    <td><?php echo $us->u_email;?></td>
                    <td><?php echo $us->senha;?></td>
                    <td><?php echo $us->cpf;?></td>
                    <td><?php echo $us->usuario_tipo;?></td>
                    <td><?php echo $us->usuario_bolsista;?></td>
                    <td><?php echo $us->turno_atividades;?></td>
                    

                    <td><?php echo $us->usuario_bolsista;?></td>
                    <td>
                      <div class="btn-group">

                        <a class="btn btn-success" href="<?php echo base_url('index.php/usuario/editar/')?><?php echo $us->id_usuario;?>"">
                        	<i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="<?php echo base_url('index.php/usuario/deletar/')?><?php echo $us->id_usuario;?>">
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
  
  </div>
<?php $this->load->view('footer') ?>

