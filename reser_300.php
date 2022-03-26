<?php
include("Reservas.php");
$res = new Reservas;
$con = $res->ConectaBD();
$codigo = $_REQUEST["codigo"];
$consulta = "select * from reservas where numero = " . $codigo; 
$conx = mysqli_query($con,$consulta); 
$dado = mysqli_fetch_assoc($conx);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
<script src="funcoes.js"></script>
</head>
<body>
<form name="res" action="reser_310.php" method="post">
<table>
<tr><th colspan=2>Reservas - Registro Retorno</th></tr>
<tr><td>Reserva</td>
<td><input type="text" name="numero" size=5 readonly value=<?php echo $codigo;?>></td></tr>
<tr><td>Saída</td>
<td><input type="text" name="saida" id="saida" size=8 readonly 
value="<?php echo(date("d/m/Y",strtotime($dado['saida'])));?>"></td></tr>
<input type="hidden" name="saida_h" id="saida_h" value="<?php echo(date("Y/m/d",strtotime($dado['saida'])));?>">
<tr><td>Retorno</td>
<td><input type="date" name="ret" id="ret" size=10 required></td></tr>
<tr><td>CNH</td>
<td><input type="text" name="condut" size=4 readonly value="<?php echo $dado['cnh'];?>"></td></tr>
<tr><td>RENAVAM</td>
<td><input type="text" name="auto" size=4 readonly value="<?php echo $dado['renavam'];?>"></td></tr>
<tr><th><input type="button" id="butvalida" value="Validar data de retorno" onclick="validaret()"></th>
<th><input type="submit" id="subgrava" value="Gravar" disabled></th>
</form>
<form action="index.html" method="get">
    <th>
    <input type="submit" value="Voltar">
    </th></tr>
</form>
</table>
</body>
</html>

