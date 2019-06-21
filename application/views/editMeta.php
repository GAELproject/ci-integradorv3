<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>


<div class="row">
    <div class="col-md-2">
    </div>
<div class="col-md-8">
    <!--conteúdo do segundo grid-->
    <div  class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">Editar meta</div>
            <div class="widget-icons pull-right">
                <a id="seletor-down1" href="#">
                    <i class="fa fa-chevron-down"></i>
                </a>
                <a href="#" id="seletor-up1" >
                    <i id="" class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
            </div>
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
                                <input class="form-control" id="title" name="titulo" type="text" value="<?= $meta->titulo; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2" for="content">Descrição</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name='descricao' id="content" value="<?= $meta->descricao; ?>"><?= $meta->titulo; ?></textarea>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Data do prazo</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" type="date" name="data_prazo_finalizacao" value="<?= $meta->data_prazo_finalizacao; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Data de finalização</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" type="date" name="data_de_finalizacao" value="<?= $meta->data_de_finalizacao; ?>">
                            </div>
                        </div>
                        <!--usuário bolsista-->
                        <div class="form-group">
                            <label class="control-label col-lg-2">Finalizado?</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="situacao_final">
                                    <option value="<?= $meta->situacao_final; ?>">- <?php
                                        if($meta->situacao_final == '1'){
                                            echo 'sim';
                                        }else{
                                            echo 'Não';
                                        } ?>-</option>
                                    <option value="1">Sim</option>
                                    <option value="2">Não</option>
                                </select>
                            </div>
                        </div>
                        <!-- Tags -->

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

    <!--fim do painel-->
</div>
    <div class="col-md-2">

    </div>
</div>


<?php $this->load->view('footer') ?>


