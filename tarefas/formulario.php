<?php
	$btnCancelar = (!$exibir_tabela)?'<button>Cancelar</button>':'';
?>
<form class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>" />
	<div class="form-group">
		<?php #echo ($tarefa['nome'] != '')? $tarefa['nome'] : 'Nova tarefa';?>
		<label for="nome" class="col-sm-2 control-label">Tarefa</label>
		<div class="col-sm-10">
			<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $tarefa['nome']; ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-sm-2 control-label" >Descrição (Opcional)</label>
		<div class="col-sm-10">
		<textarea id="descricao" name="descricao" class="form-control" rows="3"><?php echo $tarefa['descricao']; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="prazo" class="col-sm-2 control-label">Prazo (Opcional)</label>
		<div class="col-sm-10">
			<input type="text" name="prazo" id="prazo" class="form-control" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>" />
		</div>
	</div>

		<fieldset>

			<legend>Prioridade</legend>
			<label class="checkbox-inline">
			<input type="radio" name="prioridade" value="1" 
				<?php echo ($tarefa['prioridade'] == 1)
					? 'checked'
					: '' ?>  />
				Baixa</label>
			<label class="checkbox-inline">
			<input type="radio" name="prioridade" value="2"  
				<?php echo ($tarefa['prioridade'] == 2)
					? 'checked'
					: '' ?> />
				Média</label>
			<label class="checkbox-inline">
			<input type="radio" name="prioridade" value="3"  
				<?php echo ($tarefa['prioridade'] == 3)
					? 'checked'
					: '' ?> />
				Alta</label>
		</fieldset>
		<div class="checkbox col-sm-10">
		<label>
			<input type="checkbox" name="concluida" value="1"  
				<?php echo ($tarefa['concluida'] == 1)
					? 'checked'
					: '' ?> />Tarefa concluída
		</label>
		</div>
		<?php echo $btnCancelar; ?>
		<button type="submit"><?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?></button>
	</div>
</form>
