<?php
include("Automoveis.php");
$auto = new Automoveis;
$con = $auto->ConectaBD();
$codigo = $_REQUEST["codigo"];
$consulta = "select * from automoveis where renavam = " . $codigo; 
$conx = mysqli_query($con,$consulta); 
$dado = mysqli_fetch_assoc($conx);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<form name="auto" action="auto_310.php" method="post">
<table>
<tr><th colspan=2>Cadastro de Automóveis - Alteração</th></tr>
<tr><td>RENAVAM</td>
<td><input type="text" name="renavam" size=5 maxlength=5 readonly value=<?php echo $codigo;?>></td></tr>
<tr><td>Marca</td>
<td>
<select name="marca" required>
<option value="">--- Escolha uma marca ---</option>
<option value="Fiat" <?php echo $dado['marca'] == 'Fiat' ? 'selected' : ''?>>Fiat</option>
<option value="Ford" <?php echo $dado['marca'] == 'Ford' ? 'selected' : ''?>>Ford</option>
<option value="GM" <?php echo $dado['marca'] == 'GM' ? 'selected' : ''?>>GM</option>
<option value="VW" <?php echo $dado['marca'] == 'VW' ? 'selected' : ''?>>VW</option>
</select>
</td></tr>
<tr><td>Modelo</td>
<td>
<select name="modelo" required>
    <option value="">--- Escolha um modelo ---</option>
	<option value="Palio" <?php echo $dado['modelo'] == 'Palio' ? 'selected' : ''?>>Palio</option>
	<option value="Fiesta" <?php echo $dado['modelo'] == 'Fiesta' ? 'selected' : ''?>>Fiesta</option>
	<option value="Onix" <?php echo $dado['modelo'] == 'Onix' ? 'selected' : ''?>>Onix</option>
	<option value="Fox" <?php echo $dado['modelo'] == 'Fox' ? 'selected' : ''?>>Fox</option>
</select>
</td></tr>
<tr><td>Placa</td>
<td><input type="text" name="placa" size=5 maxlength=7 required value=<?php echo $dado['placa'];?>></td></tr>
<tr><td>Preço</td>
<td><input type="text" name="preco" size=5 required value=<?php echo number_format($dado['preco'],2);?> 
style="text-align:right;"></td></tr>
<tr><th><input type="submit" value="Gravar"></th>
</form>
<form action="index.html" method="get">
    <th>
    <input type="submit" value="Voltar">
    </th></tr>
</form>
</table>
</body>
</html>

