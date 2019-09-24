<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>

<div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Realizar atividade em equipamento</div>
                <div class="widget-icons pull-right">
                  <a id="seletor-down3" href="#">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                  <a href="#" id="seletor-up3" >
                    <i id="" class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div id="painel3" class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/meta/salvar/')?>">
                      <!-- título da meta -->

                     <div class="form-group">
                        <label class="control-label col-lg-2">Ordem de serviço</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="OS_id_OS">
                            <option value="" selected="">- selecione a OS referente-</option>
                            <option value="1">x ordem de serviço</option>
                          </select>
                          </div>
                        </div>  
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Nome do item substituido</label>
                        <div class="col-lg-10">
                              <input class="form-control" id="title" type="text" name="nome_item_substituido">
                        </div>
                       </div>
                      <!-- Content -->
                     <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Quntidade do item subsituido</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="title" type="number" name="quantidade_item_substituido">
                            </div>
                      </div>

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

            <?php $this->load->view('footer') ?>