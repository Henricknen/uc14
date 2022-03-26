<?php
include("Automoveis.php");
$auto = new Automoveis;
$con = $auto->ConectaBD();
$consulta = "select * from automoveis"; 
$conx = mysqli_query($con,$consulta); 
?> 
<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <link rel="stylesheet" href="estilos.css">
    </head> 
    <body> 
    <div>Sistema de Locação de Automóveis</div>
    <div>Manutenção Cadastro de Automóveis</div>
    <div>
        <form name="auto" action="auto_200.php" method="post">
            <input type="submit" name="butinc" value="Inclusão">
        </form>
    </div>
      <table> 
        <tr> 
          <th>RENAVAM</th> 
          <th>Marca</th> 
          <th>Modelo</th> 
          <th>Placa</th>
          <th>Preço</th>
          <th>Ação</th> 
        </tr> 
        <?php while($dado = mysqli_fetch_assoc($conx)) { ?> 
        <tr> 
          <td><?php echo $dado['renavam']; ?></td>
          <td><?php echo $dado['marca']; ?></td> 
          <td><?php echo $dado['modelo']; ?></td> 
          <td><?php echo $dado['placa']; ?></td> 
          <td><?php echo number_format($dado['preco'],2,',','.'); ?></td> 
          <td> 
            <a href="auto_300.php?codigo=<?php echo $dado['renavam']; ?>">Editar</a> 
            <a href="auto_400.php?codigo=<?php echo $dado['renavam']; ?>" onclick="return confirm('Confirma Exclusão ???')">Excluir</a> 
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
      <div>
          <form name="volta" action="index.html" method="get">
                <input type="submit" name="butvolta" value="Voltar">
          </form>
      </div>
    </body> 
</html>
