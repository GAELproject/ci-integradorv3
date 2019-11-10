<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>





<div class="main-content container-fluid">

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
        <a href="<?= base_url('index.php/meta/index');?>"> <i class="fa fa-arrow-left"></i> Visualizar todas as metas</a>
        
            
    </div>
</div>
<div class="row">    
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    
        <h3><?= $meta->titulo; ?></h3>

       
            <strong>
            Descrição:</strong>
            <?= $meta->descricao;?> 
        </p>
        <p>
            <strong>
                Data de criação: 
            </strong>
            <?= $meta->data_criacao; ?>
            
        </p>
        <p>
            <strong>
                Data do prazo para a finalização: 
            </strong>
            <?= implode("-", array_reverse(explode("-", $meta->data_prazo_finalizacao)));; ?>
        </p>
        <p>
            <strong>
                Data da finalização: 
            </strong>
            <?= implode("-", array_reverse(explode("-", $meta->data_finalizacao)));; ?>
        </p>
        <p>
            <strong>
                Turno de execução da meta
            </strong>
            <?= $meta->turno; ?>
        </p>
        <p>
            <strong>
                Situação atual da meta:
            </strong>
            <?php if($meta->situacao == 0)
									{
									echo "finalizado";
									}elseif($meta->situacao == 1	)
									{
										echo"não finalizado";
									}?>
        </p>
        <p>
            <strong>
                Usuários vinculados:
            </strong>
            <br>
            <?php
                foreach ($usuarios as $usuario) {
                    foreach ($usuario_tem_meta as $utm) {
                        if($usuario->id_usuario==$utm->usuario_id &&
                            $utm->meta_id == $meta->id_meta){
                            echo $usuario->u_nome."<br>";
                        }
                    }
                }
            ?>
        </p>
        
    </div>
    <div class="col-sm-2"></div>

</div>
</div>

<?php $this->load->view('footer') ?>


