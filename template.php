
<?php
 require_once 'configuracao/bd.php';
 include 'menu.php';


 
?>

<link rel="stylesheet" type="text/css" href="folha2.css">

<div id="main">
	<h1>Extrair XML</h1>
<form action="processa.php" method="post">
	
		<legend>Campo Xml</legend>
		<input name="arquivos[]" type="file" multiple="multiple">
		<input type="submit" value="Enviar arquivo">
	
</form>
<div id="main">

	


