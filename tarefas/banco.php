<?php

	$bdServidor = '127.0.0.1';
	$bdUsuario = 'sistematarefa';
	$bdSenha = 'sistema';
	$bdBanco = 'tarefas';

	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

	if (mysqli_connect_errno($conexao)) {
		echo "Problemas para conext no banco. Verifique os dados!";
		die();
	}

?>
