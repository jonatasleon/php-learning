<table>
	<tr>
		<th>Tarefa</th>
		<th>Descricao</th>
		<th>Prazo</th>
		<th>Prioridade</th>
		<th>Concluida</th>
		<th>Opcoes</th>
	</tr>
	<?php foreach($lista_tarefas as $tarefaa): ?>
	<tr>
		<td>
			<?php echo $tarefaa['nome']; ?>
		</td>
		
		<td>
			<?php echo $tarefaa['descricao']; ?>
		</td>
		
		<td>
			<?php echo traduz_data_para_exibir($tarefaa['prazo']); ?>
		</td>
		
		<td>
			<?php echo traduz_prioridade($tarefaa['prioridade']); ?>
		</td>
		
		<td>
			<?php echo traduz_concluida($tarefaa['concluida']); ?>
		</td>
		
		<td>
			<a href="editar.php?id=<?php echo $tarefaa['id']; ?>">
				Editar
			</a>
		</td>
		
	</tr>
	<?php endforeach; ?>
</table>
