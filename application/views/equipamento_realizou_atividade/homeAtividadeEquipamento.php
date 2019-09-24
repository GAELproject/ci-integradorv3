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
                     <th scope="col">Responsável</th>
                     <th scope="col">data e hora da atividade</th>
                     <th scope="col">Ações</th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>
                         <a href="" class="btn btn-warning">Editar</a>
                         <a href="" class="btn btn-danger">Excluir</a>
                     </td>
                 </tr>
                 </tbody>
             </table>

        </div>

    </div>
   
</div>

<?php $this->load->view('footer') ?>
