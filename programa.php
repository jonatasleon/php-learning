<?php
	echo "Hoje é dia " . date('d/m/y');
	echo " agora são " . date('h:i:s A');
	echo " " . date('l');
	echo " e faltam " . (6 - date('w')) . " dias para o próximo sabádo";
	echo "<br>" . date('F');
?>