<?php
include("Condutores.php");
$cond = new Condutores;
$con = $cond->ConectaBD();
$consulta = "select * from condutores"; 
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
    <div>Manutenção Cadastro de Condutores</div>
    <div>
        <form name="condutores" action="condut_200.php" method="post">
            <input type="submit" name="butinc" value="Inclusão">
        </form>
    </div>
      <table> 
        <tr> 
          <th>CNH</th> 
          <th>Nome</th> 
          <th>Nascimento</th> 
          <th>Ação</th> 
        </tr> 
        <?php while($dado = mysqli_fetch_assoc($conx)) { ?> 
        <tr> 
          <td><?php echo $dado['cnh']; ?></td>
          <td><?php echo $dado['nome']; ?></td> 
          <td><?php echo date('d/m/Y', strtotime($dado['nasc'])); ?></td> 
          <td> 
            <a href="condut_300.php?codigo=<?php echo $dado['cnh']; ?>">Editar</a> 
            <a href="condut_400.php?codigo=<?php echo $dado['cnh']; ?>" onclick="return confirm('Confirma Exclusão ???')">Excluir</a> 
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
