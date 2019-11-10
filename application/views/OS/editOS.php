
<?php defined('BASEPATH') or exit('No direct script access allowed!'); ?>

<?php $this->load->view('header') ?>

<!--início da primeira row-->

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

<!--fim da primeira row-->

<!--início segunda row-->
<div class="row">


  <div class="col-sm-2"></div>
  


  <div class="col-sm-8">
            <!--conteúdo do segundo grid-->
            <div  class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left"> </div>

                <div class="clearfix"></div>
              </div>
              <div id="painel1" class="panel-body pb-3">
                <div class="padd">
                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/OS/atualizar/') . $os->id_os; ?>">
                      
                      
                      <div class="form-group">
                        <label class="control-label col-lg-7" for="content">Equipamento</label>
                        <div class="col-lg-10">
                          <select class="form-control" name='equipamento_id' id="content" required>
                            <option value="">-- Selecione um Equipamento --</option>  
                            <?php foreach($equipamentos as $equipamento){ ?>
                                <option <?php echo $equipamento->id_equipamento ==$os->equipamento_id ? 'selected':'' ?> value="<?php echo $equipamento->id_equipamento; ?>"><?php echo $equipamento->equipamento_nome; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                       </div>
                      <!-- Content -->
                       <!--turno-->
                       <div class="form-group">
                        <label class="control-label col-lg-7" for="content">Número da OS</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" name="numero_OS" id="numero_OS" required><?php echo $os->numero_OS ?></textarea>
                        </div>
                       </div>
                      <!--fim turno-->
                        <!--prazo de finalizacao-->
                     
                        <!--fim prazo finalizacao-->
                        <!--data da finalizacao-->
                        <div class="form-group">
                          <label class="control-label col-lg-7" for="data-finish">Data da criação</label>
                          <div class="col-lg-10">
                            <?php
                              $data_string = substr($os->data_criacao, 0, 10);
                              $data_time = strtotime($data_string);
                            ?>
                            <input value="<?php echo $data_string; ?>" class="form-control" id="data_criacao" type="date" name="data_criacao" required>
                          </div>
                        </div>
                        <!--fim data finalizacao--> 
                        <div class="form-group">
                          <label class="control-label col-lg-7" for="prazo">CPF do cliente</label>
                          <div class="col-lg-10">
                            <input value="<?php echo $os->cpf_cliente ?>" class="form-control" id="prazo" type='text' name="cpf_cliente" placeholder="Insira seu CPF" required>
                          </div>  
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-7" for="prazo">Nome do cliente</label>
                          <div class="col-lg-10">
                            <input value="<?php echo $os->cliente_nome ?>" class="form-control" id="prazo" type='text' name="cliente_nome" placeholder="Insira o nome do cliente" required>
                          </div>  
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-7" for="prazo">Telefone do cliente</label>
                          <div class="col-lg-10">
                            <input value="<?php echo $os->cliente_numero_telefone ?>" class="form-control" id="prazo" type='text' name="cliente_numero_telefone" placeholder="Insira o número do cliente" required>
                          </div>  
                        </div>

                        <div class="form-group">
                          <label class="control-label col-lg-7" for="prazo">Email do cliente</label>
                          <div class="col-lg-10">
                            <input value="<?php echo $os->cliente_email ?>" class="form-control" id="prazo" type='text' name="cliente_email" placeholder="Insira o email do cliente" required>
                          </div>  
                        </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" title="cadastrar">
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