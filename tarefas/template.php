<!DOCTYPE html>
<html>
<head>
<title>Gerenciador de Tarefas</title>
<meta name="generator" content="Bluefish 2.2.5" >
<meta name="author" content="Jonatas Leon" >
<meta name="date" content="2015-04-06T01:38:57-0300" >
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
	
	<?php include('formulario.php'); ?>

	<?php if($exibir_tabela):  ?>
		
		<?php include('tabela.php'); ?>

	<?php endif; ?>
</body>
</html>
