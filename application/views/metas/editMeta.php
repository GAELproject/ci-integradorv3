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

<a href="<?= base_url('index.php/meta/index');?>"> <i class="fa fa-arrow-left"></i> Visualizar todas as metas</a>
<div class="row">
    <div class="col-md-2">
    </div>
<div class="col-md-8">
    <!--conteúdo do segundo grid-->
    <div  class="panel panel-default">
        <div class="panel-heading">
        
        </div>
        <div id="painel1" class="panel-body">
            <div class="padd">
                <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/meta/atualizar/')?>">
                    <input type="hidden" name="id_meta" value="<?= $meta->id_meta;?>">
                        <!-- título da meta -->
                        <div class="form-group">    
                            <label class="control-label col-lg-7" for="title">Título da meta</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" name="titulo" type="text" value="<?= $meta->titulo; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2" for="content">Descrição</label>
                            <div class="col-lg-10"> 
                                <textarea class="form-control" name="descricao" id="content" ><?= $meta->descricao; ?></textarea>
                            </div>
                        </div>
                         <!-- turno da meta-->
                         <div class="form-group">
                            <label class="control-label col-lg-7">Para qual turno?</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="turno">
                                    <option value="1" <?php 
                                        if($meta->turno == "1"){ echo "selected";}?>>Matutino </option>
                                    <option value="2"  <?php 
                                        if($meta->turno == "2"){ echo "selected";}?>>Vespertino</option>
                                    <option value="3"  <?php 
                                        if($meta->turno == "3"){ echo "selected";}?>>Noturno</option>
                                    
                                </select>
                            </div>
                        </div>
                        <!--fim para qual turno-->
                        
                        <!-- Content -->
                        <div class="form-group">
                            <label class="control-label col-lg-7" for="data-criacao">Data de criação</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="datetime" name="data_criacao" id="data-criacao" value="<?= $meta->data_criacao;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-7" for="title">Data prazo para finalização</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" type="date" name="data_prazo_finalizacao" value="<?= $meta->data_prazo_finalizacao; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-7" for="title">Data da finalização</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" type="date" name="data_finalizacao" value="<?= $meta->data_finalizacao; ?>">
                            </div>
                        </div>
                        <!--usuário bolsista-->
                        <div class="form-group">
                            <label class="control-label col-lg-7">Situação atual?</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="situacao">
                                  
                                    <option value="1" <?php 
                                        if($meta->situacao == "1"){ echo "selected";}?>>Não finalizado</option>
                                    <option value="0" <?php 
                                        if($meta->situacao == "0"){ echo "selected";}?>>Finalizado</option>
                                </select>
                            </div>
                        </div>
                        <!-- Tags -->
                        


                        <div class="form-group">
                            <label class="control-label col-lg-7">Usuários vinculados a essa meta</label>
                            <div class="col-lg-10">
                                <?php foreach($bolsistasall as $bolsista){ ?>

                                            <input type="checkbox" name="id_usuarios[]" id="users" value="<?= $bolsista['id_usuario'];?>" 
                                                
                                             <?php foreach($usuario_tem_meta as $utm){
                                                if($meta->id_meta == $utm->meta_id &&
                                                $bolsista['id_usuario'] == $utm->usuario_id) {?>
                                                   checked
                                               <?php } }?>
                                            >
                                            
                                            <label for="">Nome: <?= $bolsista['u_nome'];?>
                                                CPF: <?=$bolsista['cpf']?> 
                                                Turno de atividades: <?= $bolsista['turno_atividades'];?></label>
                                                <br>
                                    <?php   }?>
                            </div>
                        </div>



                        <!-- Buttons -->
                        <div class="form-group">
                            <!-- Buttons -->
                            <div class="col-lg-offset-2 col-lg-9">
                                <button type="submit" class="btn btn-primary" title="cadastrar">
                                    Atualizar meta
                                </button>
                                <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/metas')?>" title="metas">Exibir metas</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--fim do painel-->
</div>
    <div class="col-md-2">

    </div>
</div>

</div>
<?php $this->load->view('footer') ?>


