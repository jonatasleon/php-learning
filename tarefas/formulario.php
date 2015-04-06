<form>
	<fieldset>
		<legend>Nova tarefa</legend>
		<label>
			Tarefa:
			<input type="text" name="nome" />
		</label>

		<label>
			Descrição (Opcional):
			<textarea name="descricao"></textarea>
		</label>

		<label>
			Prazo (Opcional):
			<input type="text" name="prazo" />
		</label>

		<fieldset>
			<legend>Prioridade</legend>
			<input type="radio" name="prioridade" value="1" checked />
				Baixa
			<input type="radio" name="prioridade" value="2" />
				Média
			<input type="radio" name="prioridade" value="3" />
				Alta
		</fieldset>

		<label>
			Tarefa concluída:
			<input type="checkbox" name="concluida" value="1" />
		</label>

		<input type="submit" value="Cadastrar" />
	</fieldset>
</form>
