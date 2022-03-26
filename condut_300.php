<?php
include("Condutores.php");
$cond = new Condutores;
$con = $cond->ConectaBD();
$codigo = $_REQUEST["codigo"];
$consulta = "select * from condutores where cnh = " . $codigo; 
$conx = mysqli_query($con,$consulta); 
$dado = mysqli_fetch_assoc($conx);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<form name="condutores" action="condut_310.php" method="post">
<table>
<tr><th colspan=2>Cadastro de Condutores - Alteração</th></tr>
<tr><td>CNH</td>
<td><input type="text" name="cnh" size=15 maxlength=15 readonly value=<?php echo $codigo;?>></td></tr>
<tr><td>Nome</td>
<td><input type="text" name="nome" size=30 maxlength=30 required value="<?php echo $dado['nome'];?>"></td></tr>
<tr><td>Data Nascimento</td>
<td><input type="date" name="nasc" size=10 maxlength=10 required value=<?php echo $dado['nasc'];?>></td></tr>
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

