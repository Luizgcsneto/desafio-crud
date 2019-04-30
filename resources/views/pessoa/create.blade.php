<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cadastrar Pessoa</title>
		
		<!-- Importações de Estilos/Scripts -->
		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		<script
			src="https://code.jquery.com/jquery-3.4.0.min.js"
			integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
			crossorigin="anonymous">
		</script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
		
		<!-- Fim da Importações de Estilos/Scripts -->

	</head>

	<body>
		<form action="pessoa" method="Post">
			@CSRF
			@method('PUT')
		  <div class="form-group row">
			<label for="nome" class="col-4 col-form-label">Nome</label> 
			<div class="col-8">
			  <input id="nome" name="nome" placeholder="Digite Seu Nome" type="text" aria-describedby="nomeHelpBlock" required="required" class="form-control"> 
			  <span id="nomeHelpBlock" class="form-text text-muted">Digite o nome completo</span>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="telefone" class="col-4 col-form-label">Telefone</label> 
			<div class="col-8">
			  <div class="input-group">
				<div class="input-group-prepend">
				  <div class="input-group-text">
					<i class="fa fa-phone"></i>
				  </div>
				</div> 
				<input id="telefone" name="telefone" placeholder="Digite Seu Telefone" type="text" aria-describedby="telefoneHelpBlock" class="form-control">
			  </div> 
			  <span id="telefoneHelpBlock" class="form-text text-muted">Digite o seu telefone no formato 00-98765-4321</span>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="cpf" class="col-4 col-form-label">CPF</label> 
			<div class="col-8">
			  <div class="input-group">
				<div class="input-group-prepend">
				  <div class="input-group-text">
					<i class="fa fa-id-card-o"></i>
				  </div>
				</div> 
				<input id="cpf" name="cpf" placeholder="Digite o CPF" type="text" aria-describedby="cpfHelpBlock" class="form-control">
			  </div> 
			  <span id="cpfHelpBlock" class="form-text text-muted">Digite o seu cpf no formato 123.456.789-00</span>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="escolaridade" class="col-4 col-form-label">Escolaridade</label> 
			<div class="col-8">
			  <div class="input-group">
				<input id="escolaridade" name="escolaridade" placeholder="Digite a Escolaridade" type="text" aria-describedby="escolaridadeHelpBlock" class="form-control">
			  </div> 
			  <span id="escolaridadeHelpBlock" class="form-text text-muted">Digite a sua escolaridade</span>
			</div>
		  </div>
		  
		  <div class="form-group row">
			<div class="offset-4 col-8">
			  <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
			</div>
		  </div>
		</form>
	</body>
</html>