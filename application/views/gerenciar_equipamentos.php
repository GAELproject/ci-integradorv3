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
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar equipamento</div>
            
                <div class="clearfix"></div>
              </div>
              <div id="painel2" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/equipamento/salvar/')?>">
                      <!-- título da meta -->
                      

                      <!-- Content -->

                      <!--usuário bolsista-->
                   
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="nome_eq">Nome do equipamento
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="nome_eq" name="equipamento_nome" type="text">
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="n">Número de série
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="n" name="numero_serie" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="marca">Marca
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="marca" name="marca" type="text">
                            </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="modelo">Modelo
                        </label>
                            <div class="col-lg-10">
                              <input class="form-control" id="modelo" name="modelo" type="text">
                            </div>
                      </div>

    
                      <div class="form-group">
                        <label class="control-label col-lg-2">Situação</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="situacao">
                            <option value="" selected disabled>- Selecione o usuário-</option>
                            <option value="1">Consertado</option>
                            <option value="2">Parcialemente consertado</option>
                            <option value="3">Não consertado</option>
                          </select>
                          </div>
                        </div>



                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
                            Cadastrar equipamento
                          </button>
                          <a class="btn btn-primary" href="<?php echo base_url('index.php/gael/equipamentos')?>" title="metas">Exibir equipamentos</a>
                         
                        </div>
                      </div>
                    </form>
                  </div>


                </div>

              </div>
            </div>
            <div class="col-sm-2"></div>  
</div>
            <?php $this->load->view('footer') ?>