<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Gerenciador de Tarefas</title>
<meta name="generator" content="Bluefish 2.2.5" >
<meta name="author" content="Jonatas Leon" >
<meta name="date" content="2015-03-01T02:56:52-0300" >
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
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Nova tarefa </legend>
			<label>
				Tarefa:
				<input type="text" name="nome" />			
			</label>		
			<input type="submit" value="Cadastrar" />
		</fieldset>	
	</form>
	<?php
		if(isset($_GET['nome'])) {
			$_SESSION['lista_tarefas'][] = $_GET['nome'];
		}
		
		$lista_tarefas = array();
		
		if(isset($_SESSION['lista_tarefas'])) {
			$lista_tarefas = $_SESSION['lista_tarefas'];
		}
		
		
	?>
	
	<table cellpadding="1" border="border" align="center" width="0">
		<tr><th>Tarefas</th></tr>
		<?php foreach($lista_tarefas as $tarefa): ?>
		<tr>
			<td><?php echo $tarefa; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>