<?php
include("Condutores.php");
$cond = new Condutores;
$con = $cond->ConectaBD();
$cond->setCnh($_REQUEST["codigo"]);
$cond->Excluir();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div>Cadastro de Condutores - Exclusão</div>
<br><br>
<div>Condutor <?php echo $cond->getCnh();?> excluído</div>
<br><br>
<form action="index.html" method="get">
    <input type="submit" value="Voltar">
</form>
</body>
</html>

