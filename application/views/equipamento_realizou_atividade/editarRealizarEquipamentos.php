<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>

<div class="main-content">

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
        <div class="container">
            <div class="row">
                <div class="col-sm-12">



                    <hr>
                    <h3>Cadastrar atividade em equipamento</h3>
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/realizar_atividade_equipamento/salvar/')?>">
                        <?php if(isset($equipamentos)):?>

                            <div class="form-group">
                                <label class="control-label col-lg-2" for="eq">Selecione o equipamento</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="equipamento_id_equipamento" id="eq" >
                                        <?php foreach($equipamentos as $eq): ?>
                                            <option value="<?= $eq->id_equipamento;?>"><?= $eq->equipamento_nome;?></option>
                                        <?php  endforeach;?>
                                    </select>
                                </div>
                            </div>
                        <?php
                        endif;?>
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="servico">Descrição da atividade</label>
                            <div class="col-lg-10">
                            <textarea class="form-control" name="descricao_servico_realizado" id="servico"  rows="3" value="<?= $atividade->descricao_servico_realizado; ?>">

                            </textarea>
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
                            <label class="control-label col-lg-2" for="qtd">Quantidade do item subsituido</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="qtd" type="number" name="qtd_item_substituido">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-2" for="situacao">Situação final</label>
                            <div class="col-lg-10">
                                <select name="situacao_final" id="situacao" class="form-control">
                                    <option value="" selected="true" disabled="true">-- selecione uma situação --</option>
                                    <option value="0">Consertado</option>
                                    <option value="1">Parcialmente consertado</option>
                                    <option value="2">Não consertado</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-2" for="def">Defeito apresentado</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="def" type="text" name="atividade_defeito">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2" for="obs">Observações</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="obs" type="text" name="observacoes">
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="form-group">
                            <!-- Buttons -->
                            <div class="col-lg-offset-2 col-lg-9">
                                <button type="submit" class="btn btn-primary" title="cadastrar">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>







                </div>
            </div>
        </div>

    </div>

<?php $this->load->view('footer') ?>
