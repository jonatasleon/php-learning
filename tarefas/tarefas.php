<?php 
	session_start();
	
	function table($lista){
		echo '<table cellpadding="1" border="border" align="center" width="0">';
		echo '<tr>
					<th>Tarefa</th>
					<th>Descrição</th>
					<th>Prazo</th>
					<th>Prioridade</th>
					<th>Concluída</th>
				</tr>';
		foreach($lista as $tarefa){
			echo '<tr>';
			foreach($tarefa as $item){		
				echo '<td>';
				echo $item;
				echo '</td>';
			}
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
			$tarefa['prazo'] = $_GET['prazo'];
		}else {
			$tarefa['prazo'] = '';
		}
		
		$tarefa['prioridade'] = $_GET['prioridade'];
		
		if(isset($_GET['concluida'])) {
			$tarefa['concluida'] = $_GET['concluida'];
		}else {
			$tarefa['concluida'] = 'não';
		}
		
		$_SESSION['lista_tarefas'][] = $tarefa;
	}		
	
	if(isset($_SESSION['lista_tarefas'])) {
		$lista_tarefas = $_SESSION['lista_tarefas'];
	}else {
		$lista_tarefas = array();
	}		

	include "template.php";
?>