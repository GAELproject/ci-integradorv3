<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>




<div class="main-content container-fluid">

<div class="section__content section__content--p30">
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class=""><?=$pagina; ?></h2>
            
            </div>
        </div>
    </div>
</div> 

            <div class="row">
                    <div class="col-sm-3">
                  
                            <?php if($usuarios->foto == '' || $usuarios->foto == NULL ){ ?>
                                <img class="rounded img-thumbnail" src="<?= base_url('assets/imagens-perfil/perfil-default.jpg') ?>" alt="foto do perfil" />
                                <?php }else{?>
                                    <img class="rounded img-thumbnail" src="<?= base_url('/').$usuarios->foto; ?>" alt="Foto do perfil" />
                                <?php }?>
                            
                    </div>

                   <div class="col-sm-8">
                            <strong>Nome:</strong>
                            <?php echo $usuarios->u_nome;?> 
                            <br>
                            <strong>email:</strong>
                            <?php echo $usuarios->u_email;?> 
                            <br>
                            <strong>CPF:</strong>
                            <?php echo $usuarios->cpf;?> 
                            <br>
                            <strong>Tipo de usuário:</strong>
                            <?php if($usuarios->usuario_tipo==1){echo "Administrador";} ?>
                            
                            <?php if($usuarios->usuario_tipo==2){echo "Bolsista";} ?>
                            <br>
                            <strong>Turno:</strong>
                            <?php if($usuarios->turno_atividades==1){echo "Manhã";} ?>
                            <?php if($usuarios->turno_atividades==2){echo "Tarde";} ?>
                            <?php if($usuarios->turno_atividades==1){echo "Noite";} ?>
                            <br>
                            
                            <a class="btn btn-success mt-3" href="<?= base_url('index.php/usuario/index'); ?>">Voltar para todos os usuários</a>
                     </div>
                    </div>
                    <div class="col-sm-1">

                    </div>
        </div>

</div>

</div>
</div>

<?php $this->load->view('footer') ?>



