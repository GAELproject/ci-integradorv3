<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>


<div class="main-content container-fluid">

	<div class="section__content section__content--p30">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="overview-wrap">
					<h2 class=""><?= $pagina; ?></h2>
				
				</div>
			</div>
		</div>
	</div>

<!--início segunda row-->
<div class="row">
  <div class="col-sm-10">
            <!--conteúdo do segundo grid-->
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left"></div>
                
                <div class="clearfix"></div>
              </div>
              <div id="painel1" class="panel-body">
                <div class="padd">
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/laudo/atualizar/')?>">
                      <!-- título da meta -->
                            <input type="hidden" name="id_laudo" value="<?= $id_laudo; ?>">
                      <div class="form-group">
                            
                            <div class="col-lg-10">
                                <label for="equ">Equipamento referente ao laudo</label>
                                <select  class="form-control" name="equipamento_laudo_id" id="equ">
                                    <?php foreach($equipamentos as $eq){?>
                                        <option value="<?= $eq->id_equipamento; ?>" <?= $laudo->equipamento_laudo_id == $eq->id_equipamento ? "selected" : "" ; ?>> 
                                            Nome: <?= $eq->equipamento_nome;?> -- Número de série: <?= $eq->numero_serie;?>
                                        </option>
                                    <?php }?>
                                </select>
                            </div>  
                      </div>

                      <div class="form-group">
                        <label class="control-label col-lg-7" for="content">Possíveis defeitos</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="possiveis_defeitos" id="content">
                                <?= $laudo->possiveis_defeitos;?>
                          </textarea>
                        </div>
                       </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-7" for="b">Possíveis causas</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="possiveis_causas" id="b">
                                <?= $laudo->possiveis_causas;?>
                          </textarea>
                        </div>
                       </div>

                       <div class="form-group">
                        <label class="control-label col-lg-7" for="c">Possíveis soluções</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="possiveis_solucoes" id="c">
                                <?= $laudo->possiveis_solucoes;?>
                          </textarea>
                        </div>
                       </div>
                       <!--turno-->
                   
                      <!--fim turno-->
                        <!--prazo de finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-7" for="prazo">Data de entrega</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="prazo" value="<?= $laudo->data_entrega;?>" type="date" name="data_entrega">
                          </div>  
                        </div>
                        <!--fim prazo finalizacao-->
                        <!--data da finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-7" for="cliente">Nome do cliente</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="cliente" value="<?= $laudo->cliente;?>" type="text" name="cliente">
                          </div>
                        </div>
                        <!--fim data finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-7" for="destino">Destino</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="destino" value="<?= $laudo->destino;?>" type="text" name="destino">
                          </div>
                        </div>
                      
                      <!--situacação-->
                   
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-success" title="atualizar">
                            Atualizar
                          </button>
                          
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