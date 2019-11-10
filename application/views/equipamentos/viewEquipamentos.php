<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>
<?php $this->load->view('header') ?>



<div class="main-content container-fluid">

	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="overview-wrap">
					<h2 class=""><?=$pagina; ?></h2>
				
				</div>
			</div>
		</div>
	</div>

    <div class="row">
    <div class="col-sm-12">
        <a href="<?= base_url('index.php/equipamento/index');?>"> <i class="fa fa-arrow-left"></i> Visualizar todas os equipamentos</a>
        
            
    </div>
</div>
<div class="row">    
    <div class="col-sm-2"></div>
    <div class="col-sm-10 pt-3">
            <h3><?= $equipamento->equipamento_nome; ?></h3>
        
        

        
            <strong>
            Número de série:</strong>
            <?= $equipamento->numero_serie;?> 
        </p>
        <p>
            <strong>
                Marca: 
            </strong>
            <?= $equipamento->marca; ?>
            
        </p>
        <p>
            <strong>
                Modelo: 
            </strong>
            <?= $equipamento->modelo ?>
        </p>
        <p>
            <strong>
                Situação: 
            </strong>
            <?php if($equipamento->situacao == "1"){
                    echo "consertado";

                }else if($equipamento->situacao == "2"){
                    echo "parcialmente consertado";
                }else if($equipamento->situacao == "3")
                {
                    echo "Não consertado";
                }?>
        </p>
        <p>
            <strong>
                Foi entregue ao cliente?
            </strong>
            <?php if($equipamento->entregue == true){
                echo "sim";
            }else if($equipamento->entregue == false){
                echo "Não";
            }else{
                echo "database error";  
            } 
            ?>
        </p>
        <p>
         
    </div>
    
    <div class="col-sm-2"></div>

</div>
</div>


<?php $this->load->view('footer') ?>