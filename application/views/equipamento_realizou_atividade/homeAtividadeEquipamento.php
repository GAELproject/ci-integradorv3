<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>

<div class="container-fluid">
    <a href="<?= base_url('index.php/realizar_atividade_equipamento/add')?>" class="btn btn-outline-success">Realizar nova atividade</a>
    <div class="row">
         <div class="col-sm-12">

            <!--início da tabela de listagem de atividades relizadas em equipametnos-->
             <table class="table">
                 <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">equipamento</th>
                     <th scope="col">atividade</th>
                     
                     <th scope="col">data e hora da atividade</th>
                     <th scope="col">Ações</th>
                 </tr>
                 </thead>
                 <tbody>
                 <?php if(isset($equipamento_realizou_atividades)): ?>
                    <?php foreach($equipamento_realizou_atividades as $era):?>
                    <tr>    
                        <th scope="row">1</th>
                        
                        <td>
                        <?php foreach($equipamentos as $eq): ?>
                            <?php if($era['equipamento_id_equipamento']== $eq['id_equipamento']):?> 
                                Nome: 
                                <?= $eq['equipamento_nome']?>
                                <br>
                                número de série:
                                <?= $eq['numero_serie']?>
                            <?php endif;?>
                        <?php endforeach;?> 
                        </td>
                        <td>
                        <?php foreach($atividades as $at): ?>
                            <?php if($era['atividade_id_atividade']== $at['id_atividade']):?> 
                                Descrição do serviço:
                                <?= $at['descricao_servico_realizado']?>
                            <?php endif;?>
                        <?php endforeach;?>
                        </td>
                        
                        <td>
                            <?= $era['data_hora_atividade'];?>
                        </td>
                        <td>
                            <a href="" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif;?>
                 </tbody>
             </table>

        </div>

    </div>
   
</div>

<?php $this->load->view('footer') ?>
