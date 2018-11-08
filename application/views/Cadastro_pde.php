<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
    	<img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
        <h4>Cadastro de PDE</h4>
    </header>
			<div class="templatemo-login-form">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open_multipart('Documentos/cadastrarpde');
					?>


				<div class="form-group">
					<input type="text" id="txt-nome-doc" name="txt-nome-doc" class="form-control" placeholder="Nome do documento" value="<?php echo set_value('txt-nome-doc') ?>" autofocus>
				</div>

			  	<div class="form-group">
				  <label for="sel1">Estado:</label>
				  <select class="form-control" id="regiao" name="regiao">
				    <option value="AC">Acre</option>
				    <option value="AL">Alagoas</option>
				    <option value="AP">Amapá</option>
				    <option value="AM">Amazonas</option>
				    <option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
				    <option value="DF">Distrito Federal</option>
				    <option value="ES">Espirito Santo</option>
				    <option value="GO">Goiás</option>
				    <option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
				    <option value="MS">Mato Grosso do Sul</option>
				    <option value="MG">Minas Gerais</option>
				    <option value="PA">Pará</option>
				    <option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
				    <option value="PE">Pernambuco</option>
				    <option value="PI">Piauí</option>
				    <option value="RJ">Rio de Janeiro</option>
				    <option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
				    <option value="RO">Rondônia</option>
				    <option value="RR">Roraima</option>
				    <option value="SC">Santa Catarina</option>
				    <option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				  </select>
				</div>

			  	<br><div class="form-group">
					<input type="file" name="arquivo" id="arquivo"/>
				</div>

				<br><br><input type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505;margin-bottom: 30px" value="Cadastrar" />
			</form>
			</div>
	</div>
	</body>
</html>
