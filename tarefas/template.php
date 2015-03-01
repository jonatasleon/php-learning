
<!DOCTYPE html>
<html>
<head>
<title>Gerenciador de Jonatas</title>
<meta name="generator" content="Bluefish 2.2.5" >
<meta name="author" content="Jonatas Leon" >
<meta name="date" content="2015-03-01T04:51:06-0300" >
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
			<legend>Nova tarefa</legend>
			<label>
				Tarefa:
				<input type="text" name="nome" />
			</label>
			<label>
				Descrição (Opcional):
				<textarea name="descricao" ></textarea>				
			</label>
			<label>
				Prazo (Opcional):
				<input type="text" name="prazo" />			
			</label>
			<fieldset>
				<legend>Prioridade</legend>
				<label>
					<input type="radio" name="prioridade" value="baixa" checked />
					Baixa
				</label>	
				<label>
					<input type="radio" name="prioridade" value="media" />
					Média
				</label>	
				<label>
					<input type="radio" name="prioridade" value="alta" />
					Alta	
				</label>	
			</fieldset>
			<label>
				Tarefa concluída:
				<input type="checkbox" name="concluida" value="sim" />		
			</label>
			<input type="submit" value="Cadastrar" />
		</fieldset>	
	</form>
	<?php table($lista_tarefas); ?>
</body>
</html>