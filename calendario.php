<?php
	function linha($semana){
		echo "<tr>
		";
		for ($i = 0; $i <= 6; $i++){
			$value = '<td>';
			if(isset($semana[$i])) {
				if ($i == 0) { 
					$value = $value . '<font color="red">'; 
				}elseif($i == 6) { 
					$value = $value . '<b>'; 
				}
				if ($semana[$i] == date('j')) { $value = $value . '<i>'; }
				$value = $value . $semana[$i];
				if ($semana[$i] == date('j')) { $value = $value . '</i>'; }
				if ($i == 0) { $value = $value . '</font>'; }elseif($i == 6) { $value = $value . '</b>'; }
			}
			$value = $value . '</td>';
			echo $value;
		}
		echo "</tr>
		";
	}
	
	function calendario(){
		$dia = 1;
		$semana = array();
		
		while($dia <= 31) {
				array_push($semana, $dia);
				
				if(count($semana) == 7) {
					linha($semana);
					$semana = array();
				}
				
				$dia++;
		}
		linha($semana);
	}
	
	function saudacao() {
		$saudacao = "";
		$hora = date('H');
		if($hora < 12) {
			$saudacao = "Bom dia!";
		}elseif($hora < 18) {
			$saudacao = "Boa tarde!";
		}else {
			$saudacao = "Boa noite!";			
		}
		echo $saudacao;
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Calendario - Dia <?php echo date('d/m/Y')?></title>
<meta name="generator" content="Bluefish 2.2.5" >
<meta name="author" content="Jonatas Leon" >
<meta name="date" content="2015-03-01T00:30:12-0300" >
<meta name="copyright" content="MIT License">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<meta >
</head>
	<body>
		<h1><?php saudacao() ?></h1>
		<table border="1">
			<tr>
				<th>Dom</th>
				<th>Seg</th>
				<th>Ter</th>
				<th>Qua</th>
				<th>Qui</th>
				<th>Sex</th>
				<th>Sab</th>
				<?php calendario() ?>
			</tr>
		</table>
	</body>
</html>
