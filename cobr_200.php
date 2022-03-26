<?php
include("Cobrancas.php");
$cob = new Cobrancas;
$cob->setNumero($_REQUEST["codigo"]);
$cob->ConectaBD();
$cob->Selecionar();
$cob->Calcular();
?>

<html>
<body>
<head>
<style>
    tr {background:silver; font: 14pt arial}
</style>
</head>
<body>
<table>
<tr><th colspan=3>Número da Reserva: <?php echo($cob->getNumero())?></th><tr>
<tr><th colspan=3>Banco 999   12345.67890.99999.99999.9.99999.00000</th><tr>
<tr><td  colspan=2><b>Condutor: <?php echo($cob->getNome())?></b></td> 
<th>Data Vencimento</th></tr>
<tr><th>Data Locação: <?php echo(date("d/m/Y",strtotime($cob->getSaida())))?></th>
<th>Data Retorno: <?php echo(date("d/m/Y",strtotime($cob->getRetorno())))?></th>
<th><?php echo($cob->getVenc())?></th></tr>
<tr><th>Valor da Diária: <?php echo(number_format($cob->getPreco(),2,',','.'))?></th>
<th>Total de dias: <?php echo($cob->getDias())?></th>
<th>Valor a Cobrar: <?php echo(number_format($cob->getTotal(),2,',','.'))?></th></tr>
</table><p>
<form name="manut" action="index.html" method=get>
<input name="volta" type=submit value="Voltar">
</form>
</font>
</body>
</html>
 