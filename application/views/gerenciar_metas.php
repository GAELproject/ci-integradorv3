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


<!--início da primeira row-->

<?php if (isset($error)) {
   ?>
<div class="row">

  <div class="col-sm-12">
    <div class="alert alert-danger" role="alert">
          <?= $error; ?>
    </div>
  </div>
  
  
</div>
<?php }elseif (isset($success)){ ?>
  <div class="row">

<div class="col-sm-12">
  <div class="alert alert-success" role="alert">
        <?= $success; ?>
  </div>
</div>


</div>
<?php } ?>

<!--fim da primeira row-->

<!--início segunda row-->
<div class="row">


  <div class="col-sm-2"></div>
  


  <div class="col-sm-8">
            <!--conteúdo do segundo grid-->
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar metas</div>
                
                <div class="clearfix"></div>
              </div>
              <div id="painel1" class="panel-body">
                <div class="padd">
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/meta/salvar/')?>">
                      <!-- título da meta -->
                      <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Título da meta</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" name="titulo" type="text">
                            </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Descrição</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name='descricao' id="content"></textarea>
                        </div>
                       </div>
                      <!-- Content -->
                       <!--turno-->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Para qual turno?</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="turno">
                            <option value="" selected disabled>- Selecione o turno-</option>
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Noturno</option>
                          </select>
                        </div>
                      </div>
                      <!--fim turno-->
                        <!--prazo de finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="prazo">Prazo para finalização</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="prazo" type="date" name="data_prazo_finalizacao">
                          </div>  
                        </div>
                        <!--fim prazo finalizacao-->
                        <!--data da finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="data-finish">Data da finalização</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="data-finish" type="date" name="data_finalizacao">
                          </div>
                        </div>
                        <!--fim data finalizacao-->
  

                      <!--situacação-->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Situação atual:</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="situacao_final">
                            <option value="" seleted disabled>- Selecione a stiuação -</option>
                            <option value="0">Finalizado</option>
                            <option value="1">Não finalizado</option>
                          </select>
                        </div>
                      </div>
                      <!-- fim situação -->

                   
                    <!--início listagem dos ususários do tipo 2 - não administradores-->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="users">Usuários participantes para essa meta:</label>
                        <div class="col-lg-10">
                            <?php foreach ($usuarios_comuns as $adm) {?>
                              <input type="checkbox" name="id_usuarios[]" id="users" value="<?php echo $adm['id_usuario'];?>">
                                <label for="">
                                Nome: <?= $adm['u_nome'];?> <br> Turno de atividades: <?php if($adm['turno_atividades']=='1'){
                                  echo 'Manhã';
                                }elseif ($adm['turno_atividades']=='2') {
                                  echo 'Tarde';
                                }else {
                                  echo 'Noite';
                                } ?> 

                                </label>
                                <br>
                               
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <!-- fim fim da listagem -->

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
                            Cadastrar
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/metas')?>" title="metas">Exibir metas</a>
                         
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>












  <div class="col-sm-2"></div>

</div>
<!--fim da segunda row-->

</div>

            <?php $this->load->view('footer') ?>