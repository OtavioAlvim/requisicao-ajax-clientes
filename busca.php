<?php
	//Incluir a conexão com banco de dados
	$pdo = new PDO('sqlite:./db2/sia');
	//Recuperar o valor da palavra
	$cursos = $_POST['palavras'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$sth = $pdo->prepare("select ID_CLIENTE,substr(RAZAO,0, 30) as RAZAO,substr(FANTASIA,0,25) as FANTASIA from clientes where FANTASIA like '%$cursos%'");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $t = count($result);
	// print_r($t);
	if(count($result) <= 0){
		echo "<h1>"."Nenhum produto encontrado... "."</h1>";
	}else{ ?> 
		<!-- <table>
			<tr>
				<th class="titulo_cod_modal_prod"><h2>COD</h2></th>
				<th class="titulo_desc_modal_prod"><h2>DESCRIÇÃO</h2></th>
				<th class="titulo_un_modal_prod"><h2>UN</h2></th>
				<th class="titulo_unitario_modal_prod"><h2>VALOR</h2></th>
			</tr>
		</table> -->
	<?php
		// echo  'achou algo';
		foreach($result as $row=> $rows){?>
			<tr>
				<br>
				<div class="modal_cli_pesq">
					<div>
						<td><strong><?php echo $rows['ID_CLIENTE'];?> - </strong></td>
					</div>
					<div class="desc_modal_cli">
						<td><strong> <?php echo $rows['RAZAO'];?></strong></td>
					</div>
					<div class="unid_modal_cli">
						<td><strong><?php echo $rows['FANTASIA'];?></strong></td>
					</div>
					<div class="botao_inserir_modal_cli">
						<td><a href="mais_detalhes.php?id=<?php echo $rows['ID_CLIENTE']?>"><button>INSERIR</button></a></td>
					</div>
				
				</div>
				<hr>
			</tr>
		<?php
		}
	}
?>
