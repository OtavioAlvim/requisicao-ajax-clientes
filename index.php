<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="scrip.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	<script type="text/javascript" src="javascriptpersonalizado.js"></script>
	<title>Teste Modal</title>
</head>

<body>
	<div class="buton-center">
		<button class="ola" onclick="abreModalClientes()" accesskey="S">Clique aqui</button>
	</div>

	<div class="modalsss" id="modalss">
		<div class="modal-contentss">
			<span class="close-buttonss" onclick="fechaModalClientes()">
				&times;
			</span>
			<div class="container theme-showcase" role="main">
				<div class="page-header">
					<h1 id="titulo_modal_clientes">Pesquisar Clientes</h1>
					<form method="POST" id="form-pesquisa" action="">
						<div class="form-group">
							<input type="text" name="pesquisa_emitente" class="pesquisa_modal_clientes" id="pesquisa_emitente" placeholder="Pesquisar Emitente">
						</div>
					</form>


				</div>
				<div class="row">
					<table class="testandoGridClientes">
						<tr>
							<th class="titulo_cod_modal_cli">
								<h2>COD</h2>
							</th>
							<th class="titulo_desc_modal_cli">
								<h2>RAZAO</h2>
							</th>
							<th class="titulo_un_modal_cli">
								<h2>FANTASIA</h2>
							</th>
						</tr>
					</table>
					<div class="col-md-6">
						<ol class="resultado-emitente">

						</ol>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>