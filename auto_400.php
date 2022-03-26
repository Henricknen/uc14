<?php
include("Automoveis.php");
$auto= new Automoveis;
$con = $auto->ConectaBD();
$auto->setRenavam($_REQUEST["codigo"]);
$auto->Excluir();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div>Cadastro de Automóveis - Exclusão</div>
<br><br>
<div>Automóvel <?php echo $auto->getRenavam();?> excluído</div>
<br><br>
<form action="index.html" method="get">
    <input type="submit" value="Voltar">
</form>
</body>
</html>

