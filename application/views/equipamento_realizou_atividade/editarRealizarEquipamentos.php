<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>

<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class=""  class=""><?=$pagina; ?></h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">



                    <hr>
                    
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/realizar_atividade_equipamento/atualizar/')?>">
                        <input type="hidden" name="id_equipamento_realizou_atividade" value="<?= $id_equipamento_realizou_atividade; ?>">
                        <input type="hidden" name="id_atividade" value="<?= $id_atividade; ?>">
                        <?php if(isset($equipamentos)):?>

                            <div class="form-group">
                                <label class="control-label col-lg-7" for="eq">Selecione o equipamento</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="equipamento_id_equipamento" id="eq" >
                                        <?php foreach($equipamentos as $eq): ?>
                                            <?php if($era->equipamento_id_equipamento == $eq->id_equipamento){ ?>
                                            <option value="<?php echo $eq->id_equipamento; ?>" selected=""><?= $eq->equipamento_nome;?></option>
                                            <?php }else{?>
                                                <option value="<?php echo $eq->id_equipamento; ?>"><?= $eq->equipamento_nome;?></option>                                                
                                            <?php }?>
                                        <?php  endforeach;?>
                                    </select>
                                </div>
                            </div>
                        <?php
                        endif;?>
                        <div class="form-group">
                            <label class="control-label col-lg-7" for="servico">Descrição da atividade</label>
                            <div class="col-lg-10">
                            <textarea  class="form-control" name="descricao_servico_realizado" id="servico"  rows="3" >
                                    <?= $atividade->descricao_servico_realizado; ?>
                            </textarea>
                     
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-7" for="content">Nome do item substituido</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="title" type="text" name="nome_item_substituido" value="<?= $atividade->nome_item_substituido; ?>">
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="form-group">
                            <label class="control-label col-lg-7" for="qtd">Quantidade do item subsituido</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="qtd" type="number" name="qtd_item_substituido" value="<?= $atividade->qtd_item_substituido;?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-7" for="situacao">Situação final</label>
                            <div class="col-lg-10">
                                <select name="situacao_final" id="situacao" class="form-control">
                                    <?php if($atividade->situacao_final == "0"){?>
                                        <option value="0" selected>Consertado</option>
                                        <option value="1" >Parcialmente consertado</option>
                                        <option value="2" >Não consertado</option>
                                    <?php }elseif($atividade->situacao_final == "1"){?>
                                        <option value="0" >Consertado</option>
                                        <option value="1" selected>Parcialmente consertado</option>
                                        <option value="2" >Não consertado</option>

                                        <?php }elseif($atividade->situacao_final == "2"){ ?>
                                        <option value="0" >Consertado</option>
                                        <option value="1" >Parcialmente consertado</option>
                                        <option value="2" selected>Não consertado</option>
                                    <?php }else{ ?>
                                        <option value="0" >Consertado</option>
                                        <option value="1" >Parcialmente consertado</option>
                                        <option value="2" selected>Não consertado</option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-7" for="def">Defeito apresentado</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="def" type="text" name="atividade_defeito" value="<?= $atividade->atividade_defeito;?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-7" for="obs">Observações</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="obs" type="text" name="observacoes" value="<?= $atividade->observacoes;?>">
                            </div>
                        </div>
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

<?php $this->load->view('footer') ?>
