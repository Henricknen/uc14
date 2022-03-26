<?php
include("Reservas.php");
$res = new Reservas;
$res->setNumero($_REQUEST["numero"]);
$res->setRetorno($_REQUEST["ret"]);
$res->ConectaBD();
$res->Fechar();
?>

<html>
<body>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<div>Reservas - Registro Retorno</div>
<table>
<tr><th>Reserva</th><th>Retorno</th></tr>
<tr><td><?php echo($res->getNumero())?></td><td><?php echo ($res->getRetorno())?></td></tr>
</table><p>
<div>Reserva alterada com sucesso !!!</div><p></p>
<form name="manut" action="index.html" method=get>
<input name="volta" type=submit value="Voltar">
</form>
</font>
</body>
</html>
