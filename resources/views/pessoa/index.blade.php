<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Pessoas</title>
		
		<!-- Importações de Scripts -->

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<script
			src="https://code.jquery.com/jquery-3.4.0.min.js"
			integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
			crossorigin="anonymous">
		</script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
		
		<!-- Fim da Importações de Scripts -->

	</head>
	<body>
		<table id="table_pessoa" class="display">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Telefone</th>
					<th>CPF</th>
					<th>Escolaridade</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@if($pessoas)
					@foreach($pessoas as $pessoa)
						<tr>
							<td>{{ $pessoa->id_pessoa }}</td>
							<td>{{ $pessoa->nome }}</td>
							<td>{{ $pessoa->telefone }}</td>
							<td>{{ $pessoa->cpf }}</td>
							<td>{{ $pessoa->escolaridade }}</td>
							<td><a href="#" class="btn btn-success">Editar </a><a href="#" class="btn btn-danger"> Excluir</a></td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
        <br>
		<a href="#" class="btn btn-success float-right">Cadastrar</a>
		
		<script>
            $(document).ready( function () {
            $('#table_pessoa').DataTable();
        } );
		</script>
		
		
	</body>
</html>