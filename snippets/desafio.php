<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="generator" content="Bluefish 2.2.5" >
<meta name="author" content="Jonatas Leon" >
<meta name="date" content="2015-03-01T03:20:40-0300" >
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<link href="tarefas.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Gerenciador de Contatos</h1>
	<form>
		<fieldset>
			<legend>Novo contato </legend>
			<label>
				Nome
				<input type="text" name="nome" />			
			</label>
			<label>
				Telefone
				<input type="text" name="telefone" />			
			</label>
			<label>
				E-mail
				<input type="text" name="email" />			
			</label>		
			<input type="submit" value="Cadastrar" />
		</fieldset>	
	</form>
	<?php
		$contato = array();
		
		if(isset($_GET['nome'])) {
			$contato[] = $_GET['nome'];
			$contato[] = $_GET['telefone'];
			$contato[] = $_GET['email'];
			
			$_SESSION['lista_contato'][] = $contato;
		}
		
		$lista_contato = array();
		
		if(isset($_SESSION['lista_contato'])) {
			$lista_contato = $_SESSION['lista_contato'];
		}
		
		
	?>
	
	<table cellpadding="1" border="border" align="center" width="0">
		<tr><th colspan="3">Contatos</th></tr>
		<tr><th>Nome</th><th>Telefone</th><th>Endereço</th></tr>
		<?php foreach($lista_contato as $contato): ?>
		<tr>
			<?php foreach($contato as $dado): ?>
			<td><?php echo $dado; ?></td>
			<?php endforeach; ?>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>