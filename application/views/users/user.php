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
    <a class="btn btn-primary mb-3" href="<?= base_url('index.php/gael/gerenciar_usuario')?>">Adicionar um novo usuario</a>
			<section class="panel">
        
      <div class="table-responsive table--no-card m-b-30">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i>Nome</th>
                    <th><i class="icon_calendar"></i>E-mail</th>
                    <th><i class="icon_mail_alt"></i>senha</th> 
                    <th><i class="icon_pin_alt"></i>cpf</th>
                    <th><i class="icon_mobile"></i>tipo de usuário</th>
                    <th><i class="icon_cogs"></i> Bolsista remunerado? </th>
                    <th><i class=""></i>turno de atividades</th>
                    <th><i class=""></i>ações</th>
                  </tr>
                  <?php foreach ($usuarios as $key => $us) {
                  	?>
                  <tr>
                    <td><?php echo $us->u_nome;?></td>
                    <td><?php echo $us->u_email;?></td>
                    <td><?php echo $us->senha;?></td>
                    <td><?php echo $us->cpf;?></td>
                    <td><?php if($us->usuario_tipo == "1")
                                      { echo "administrador";}
                                      elseif($us->usuario_tipo == "2")
                                      { echo "bolsista";}?>
                    </td>
                    <td>
                        <?php if ($us->usuario_bolsista == "1")
                                    { echo "sim";}elseif($us->usuario_bolsista == "2")
                                    { echo "não";}?>
                    </td>
                    <td>
                            <?php if($us->turno_atividades == "1")
                                      { echo "Manhã";}elseif($us->turno_atividades == "2")
                                      { echo "Tarde";}elseif($us->turno_atividades == "3")
                                      { echo "Noite";}?>
                      </td>
                    

                    
                    <td>
                      <div class="btn-group">

                        <a class="btn btn-success" href="<?php echo base_url('index.php/usuario/editar/')?><?php echo $us->id_usuario;?>">
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

              </div>
              
            </section>
		</div>
	</div>
  <!--fim da row-->
  
  </div>
<?php $this->load->view('footer') ?>

