
<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>

<!--início da primeira row-->


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

<?php if (isset($error)) {
   ?>
<div class="row">

  <div class="col-sm-12">
    <div class="alert alert-danger" role="alert">
          <?= $error; ?>
    </div>
  </div>
  
  
</div>
<?php }elseif (isset($success)){ ?>
  <div class="row">

<div class="col-sm-12">
  <div class="alert alert-success" role="alert">
        <?= $success; ?>
  </div>
</div>


</div>
<?php } ?>

<!--fim da primeira row-->

<!--início segunda row-->
<div class="row">


  <div class="col-sm-2"></div>
  


  <div class="col-sm-8">
            <!--conteúdo do segundo grid-->
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Gerenciar OS</div>
               
                <div class="clearfix"></div>
              </div>
              <div id="painel1" class="panel-body">
                <div class="padd">
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/OS/cadastrar/')?>">
                      <!-- título da meta -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Equipamento</label>
                        <div class="col-lg-10">
                          <select class="form-control" name='equipamento_id' id="content" required>
                            <option value="">-- Selecione um Equipamento --</option>  
                            <?php foreach($equipamentos as $equipamento){ ?>
                                <option value="<?php echo $equipamento->id_equipamento; ?>"><?php echo $equipamento->equipamento_nome; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                       </div>
                      <!-- Content -->
                       <!--turno-->
                       <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Número da OS</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="numero_OS" id="numero_OS" required></textarea>
                        </div>
                       </div>
                      <!--fim turno-->
                        <!--prazo de finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-2" for="prazo">CPF do cliente</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="prazo" type='text' name="cpf_cliente" placeholder="Insira o CPF do cliente" required>
                          </div>  
                        </div>


                          <div class="form-group">
                          <label class="control-label col-lg-2" for="nomec">Nome do cliente</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="nomec" type="text" name="cliente_nome" placeholder="Nome do cliente" required>
                          </div>  
                        </div>

                          <div class="form-group">
                          <label class="control-label col-lg-2" for="num">Número do telefone do cliente</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="num" type="text" name="cliente_numero_telefone" placeholder="Número do telefone do cliente" required>
                          </div>  
                        </div>

                          <div class="form-group">
                          <label class="control-label col-lg-2" for="cemail">E-mail do cliente</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="cemail" type="email" name="cliente_email" placeholder="Insira o e-amil do cliente" required>
                          </div>  
                        </div>
     

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
                            Cadastrar
                          </button>
                          <a class="btn btn-default" href="<?php echo base_url('index.php/os/index')?>" title="metas">Exibir Os</a>
                         
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