<div class="row-fluid" style="margin-top:0">
    <div class="span12">
          <div class="widget-box">
                <div class="widget-title">
                      <span class="icon">
                            <i class="icon-align-justify"></i>
                      </span>
                      <h5>Editar Serviço</h5>
                </div>
                <div class="widget-content nopadding">
                      <?=$custom_error; ?>
                      <form action="<?=current_url()?>" id="formServico" method="post" class="form-horizontal" >
                          <?=form_hidden('idServicos', $result->idServicos)?>
                          <div class="control-group">
                                  <label for="nome" class="control-label">Nome<span class="required">*</span></label>
                                  <div class="controls">
                                        <input id="nome" type="text" name="nome" value="<?=$result->nome?>"  />
                                  </div>
                            </div>
                            <div class="control-group">
                                  <label for="preco" class="control-label"><span class="required">Preço*</span></label>
                                  <div class="controls">
                                      <input id="preco" class="money" type="text" name="preco" value="<?=$result->preco?>"  />
                                  </div>
                            </div>
                            <div class="control-group">
                                  <label for="descricao" class="control-label">Descrição</label>
                                  <div class="controls">
                                        <input id="descricao" type="text" name="descricao" value="<?=$result->descricao?>"  />
                                  </div>
                            </div>

                            <div class="form-actions">
                            <div class="span12">
                                  <div class="span6 offset3">
                                  <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Alterar</button>
                                  <a href="<?=site_url('servicos')?>" id="btnAdicionar" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                  </div>
                            </div>
                            </div>
                      </form>
                </div>
          </div>
    </div>
</div>

<script src="<?=base_url('js/jquery.validate.js')?>"></script>
<script src="<?=base_url('js/maskmoney.js'); ?>"></script>
<script type="text/javascript">
      $(document).ready(function(){
          $(".money").maskMoney();
           $('#formServico').validate({
            rules :{
                  nome:{ required: true},
                  preco:{ required: true}
            },
            messages:{
                  nome :{ required: 'Campo Requerido.'},
                  preco :{ required: 'Campo Requerido.'}
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
</script>
