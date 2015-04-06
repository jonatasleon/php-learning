<?php 
	session_start();
	
	include "banco.php";
	include "helpers.php";

	$exibir_tabela = true;
	
	function table($lista){
		echo '<table cellpadding="1" border="border" align="center" width="0">';
		echo '<tr>';
		echo '	<th>Tarefa</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
			<th>Opções</th>';
		echo '</tr>';

		foreach($lista as $tarefa){
			echo '<tr>';
				echo '<td>' . $tarefa['nome'] 				. '</td>';
				echo '<td>' . $tarefa['descricao'] 			. '</td>';
				echo '<td>' . traduz_data_para_exibir($tarefa['prazo'])	. '</td>';
				echo '<td>' . traduz_prioridade($tarefa['prioridade']) 	. '</td>';
				echo '<td>' . traduz_concluida($tarefa['concluida'])	. '</td>';
				echo '<td>
					<a href="editar.php?id=' . $tarefa['id'] . '>
					Editar
					</a>
				</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	
	if(isset($_GET['nome']) && $_GET['nome'] != '') {
		$tarefa = array();		
		
		$tarefa['nome'] = $_GET['nome'];
		
		if(isset($_GET['descricao'])) {
			$tarefa['descricao'] = $_GET['descricao'];
		}else {
			$tarefa['descricao'] = '';
		}
		
		if(isset($_GET['prazo'])) {
			$tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
		}else {
			$tarefa['prazo'] = '';
		}
		
		$tarefa['prioridade'] = $_GET['prioridade'];
		
		if(isset($_GET['concluida'])) {
			$tarefa['concluida'] = 1;
		}else {
			$tarefa['concluida'] = 0;
		}
		
		#$_SESSION['lista_tarefas'][] = $tarefa;

		gravar_tarefa($conexao, $tarefa);
		header('Location: tarefas.php');
		die();
	}		
	
	#if(isset($_SESSION['lista_tarefas'])) {
	#	$lista_tarefas = $_SESSION['lista_tarefas'];
	#}else {
	#	$lista_tarefas = array();
	#}
	
	$lista_tarefas = buscar_tarefas($conexao);

	$tarefa = array(
		'id' 		=> 0,
		'nome'		=> '', 
		'descricao'	=> '',
		'prazo'		=> '', 
		'prioridade'	=> 1,
		'concluida'	=> ''
	);

	include "template.php";
?>
