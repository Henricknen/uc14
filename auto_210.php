<?php
include("Automoveis.php");
$auto = new Automoveis;
$auto->setRenavam($_REQUEST["renavam"]);
$auto->setMarca($_REQUEST["marca"]);
$auto->setModelo($_REQUEST["modelo"]);
$auto->setPlaca($_REQUEST["placa"]);
$auto->setPreco($_REQUEST["preco"]);
$auto->ConectaBD();
$auto->Incluir();
?>

<html>
<body>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<div>Cadastro de Automóveis</div><p>
<table>
<tr><th>RENAVAM</th><th>Marca</th><th>Modelo</th><th>Placa</th><th>Preço</th></tr>
<tr><td><?php echo($auto->getRenavam())?></td>
<td><?php echo ($auto->getMarca())?></td><td><?php echo($auto->getModelo())?></td>
<td><?php echo ($auto->getPlaca())?></td><td><?php echo (number_format($auto->getPreco(),2,',','.'))?></td></tr>
</table><p>
<div>Automóvel incluído com sucesso !!!</div><p>
<form name="manut" action="index.html" method=get>
<input name="volta" type=submit value="Voltar">
</form>
</font>
</body>
</html>
