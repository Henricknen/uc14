<?php
include("Automoveis.php");
$auto = new Automoveis;
$auto->setRenavam($_REQUEST["renavam"]);
$auto->setMarca($_REQUEST["marca"]);
$auto->setModelo($_REQUEST["modelo"]);
$auto->setPlaca($_REQUEST["placa"]);
$auto->setPreco($_REQUEST["preco"]);
$auto->ConectaBD();
$auto->Alterar();
?>

<html>
<body>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<div>Cadastro de Automóveis - Alteração</div>
<table>
<tr><th>RENAVAM</th><th>Marca</th><th>Modelo</th><th>Placa</th><th>Preço</th></tr>
<tr><td><?php echo($auto->getRenavam())?></td><td><?php echo ($auto->getMarca())?></td>
<td><?php echo($auto->getModelo())?><td><?php echo ($auto->getPlaca())?></td>
<td><?php echo ($auto->getPreco())?></td></tr>
</table><p>
<div>Automóvel alterado com sucesso !!!</div><p></p>
<form name="manut" action="index.html" method=get>
<input name="volta" type=submit value="Voltar">
</form>
</font>
</body>
</html>
