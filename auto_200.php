<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<form name="auto" action="auto_210.php" method="post">
<table>
<tr><th colspan=2>Cadastro de Automóveis - Inclusão</th></tr>
<tr><td>Renavam</td>
<td><input type="text" name="renavam" size=15 maxlength=15 required></td></tr>
<tr><td>Marca</td>
<td>
<select name="marca" required>
<option value="">--- Escolha uma marca ---</option>
<option value="Fiat">Fiat</option>
<option value="Ford">Ford</option>
<option value="GM">GM</option>
<option value="VW">VW</option>
</select>
</td></tr>
<tr><td>Modelo</td>
<td>
<select name="modelo" required>
    <option value="">--- Escolha um modelo ---</option>
	<option value="Palio">Palio</option>
	<option value="Fiesta">Fiesta</option>
	<option value="Onix">Onix</option>
	<option value="Fox">Fox</option>
</select>
</td></tr>
<tr><td>Placa</td>
<td><input type="text" name="placa" size=8 maxlength=8 required></td></tr>
<tr><td>Preço</td>
<td><input type="text" name="preco" size=10 maxlength=10 required></td></tr>
<tr><th>
<input type="submit" name="butinc" value="Gravar">
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

