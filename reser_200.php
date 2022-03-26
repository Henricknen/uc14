<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<form name="res" action="reser_210.php" method="post">
<table>
<tr><th colspan=5>Reservas</th></tr>
<tr><td>Número</td>
<td><input type="text" name="numero" size=5 maxlength=5 required></td></tr>
<tr><td>Saída</td>
<td><input type="date" name="saida" size=10 required></td></tr>
<tr><td>Condutor</td>
<td>
<?php
include "Condutores.php";
$cond = new Condutores;
$con = $cond->ConectaBD();
$consulta = "select * from condutores";
$conx = mysqli_query($con,$consulta);
?>
<select name="condut" required>
    <option value=''>--- Selecione um condutor ---</option>
    <?php while($dado = mysqli_fetch_assoc($conx)) { ?> 
    <option value=<?php echo $dado['cnh']; ?>><?php echo $dado['cnh']; ?></option>
    <?php } ?>
</select>
</td></tr>
<tr><td>Automóvel</td>
<td>
<?php
include "Automoveis.php";
$auto = new Automoveis;
$con = $auto->ConectaBD();
$consulta = "select * from automoveis";
$conx = mysqli_query($con,$consulta);
?>
<select name="auto" required>
    <option value=''>--- Selecione um automóvel ---</option>
    <?php while($dado = mysqli_fetch_assoc($conx)) { ?> 
    <option value=<?php echo $dado['renavam']; ?>><?php echo $dado['renavam']; ?></option>
    <?php } ?>
</select>
</td></tr>
<tr><th>
<input type="submit" name="butreg" value="Gravar">
</th>
</form>
<form name="volta" action="index.html" method="get">
<th>
<input type="submit" name="butvolta" value="Voltar">
</th></tr>
</table>
</form>
</body>
</html>

