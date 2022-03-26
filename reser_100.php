<?php
include("Reservas.php");
$res = new Reservas;
$con = $res->ConectaBD();
$consulta = "select * from reservas where retorno is null"; 
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
    <div>Reservas</div>
    <div>
        <form name="res" action="reser_200.php" method="post">
            <input type="submit" name="butinc" value="Inclusão">
        </form>
    </div>
      <table> 
        <tr> 
          <th>Reserva</th> 
          <th>Saída</th> 
          <th>Retorno</th> 
          <th>Preço</th>
          <th>CNH</th>
          <th>Renavam</th>
          <th>Ação</th> 
        </tr> 
        <?php while($dado = mysqli_fetch_assoc($conx)) { ?> 
        <tr> 
          <td><?php echo $dado['numero']; ?></td>
          <td><?php echo date('d/m/Y', strtotime($dado['saida'])); ?></td> 
          <td>------------</td>
          <td style="text-align:right;"><?php echo number_format($dado['preco'],2,',','.'); ?></td>
          <td><?php echo $dado['cnh']; ?></td>
          <td><?php echo $dado['renavam']; ?></td>
          <td> 
            <a href="reser_300.php?codigo=<?php echo $dado['numero']; ?>">Registrar Retorno</a> 
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
