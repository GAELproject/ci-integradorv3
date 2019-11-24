<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>
<!--início main-content-->
<div class="main-content">
    <!--início row-->
    <div class="row">
        <!--início da div section-->
        <div class="section__content section__content--p30"  >
            <!--início do contanier fluid-->     
            <div class="container-fluid" style="">
                <div class="row mb-3">
                    <div class="col-sm-12">
                          <?php if($this->session->flashdata('success')){?>
                                <div class="alert alert-success" role="alert">
                                    <?= $this->session->flashdata('success');?>
                                </div>
                            <?php }elseif($this->session->flashdata('error')){?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $this->session->flashdata('error')?>
                                </div>
                            <?php }?>
                                
                        <div class="overview-wrap">
                            <h2 class=""><i class=" <?= $icon; ?>"></i> <?= $pagina; ?></h2>
                        </div>
                        <hr>
                    
                    </div>
                </div>
            </div>
           <!--fim do container fluid-->
             <!--início do container-->
                <div class="container" style="" >

             
                      
                            
                                <div class="form-group">
                                    <form action="<?= base_url('index.php/usuario/salvarPhoto')?>" method="post" enctype="multipart/form-data">
                                        <label for="perfil"></label>
                                        <input type="file" name="foto" class="form-control-file" id="perfil">
                                        <br>    
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                    </form>
                                </div>    
               </div>
            <!--fim do container-->



        </div>
        <!--início da div section-->
    </div>
 <!--fim row-->
</div>

	<!--início main-content-->			

</div>


<?php $this->load->view('footer') ?>