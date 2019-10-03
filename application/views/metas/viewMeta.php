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
        <a href="<?= base_url('index.php/meta/index');?>"> <i class="fa fa-arrow-left"></i> Visualizar todas as metas</a>
        
            
    </div>
</div>
<div class="row">    
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <h3><?= $meta->titulo; ?></h3>

        <p>
        <a href="<?php echo base_url('index.php/meta/editar/')?><?=$meta->id_meta?>">
        <i class="fa fa-edit"></i> Editar meta</a>
        <br>
        <a href="<?php echo base_url('index.php/meta/deletar/')?><?=$meta->id_meta?>">
        <i class="fa fa-trash-o"></i>Excluir meta</a>
        </p>
        <p>
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
            <?php 
                if ($meta->situacao == "0") {
                    echo "Não finalizado";
                }elseif ($meta->situaca=="1") {
                    echo "Finalizado";
                }else{
                    echo "Database error";
                }
            $meta->situacao; ?>
        </p>
        <p>
            <strong>
                Usuários vinculados:
            </strong>
            <br>
            <?php 
                foreach ($bolsistas as $bolsista) {
                    foreach ($usuario_tem_meta as $utm) {
                        if($utm->usuario_id == $bolsista['id_usuario']){
                            ?>
                                <strong>Nome:</strong>
                            <?php
                            echo $bolsista['u_nome'];
                            ?> 
                            <strong>CPF:</strong>
                            <?php
                            echo $bolsista['cpf'];
                            ?> 
                                <strong>Turno de atividades:</strong>
                            <?php
                            if ($bolsista['turno_atividades'] == "1"){
                                echo "Matutino";
                            }elseif ($bolsista['turno_atividades'] == "2"){
                                echo "Vespertino";
                            }elseif ($bolsista['turno_atividades'] == "3"){
                                echo "Noturno";
                            }else{
                                echo "Database error";
                            }
                            echo "<br>";
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


