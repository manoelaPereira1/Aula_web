<?php 
include "../controller/UsuarioController.php";


    $usuario = new UsuarioController();
    
    if(!empty($_GET['id'])){
    $usuario->deletar($_GET['id']);
    header("location: UsuarioList.php");
   }
   if(!empty($_POST)){
    $load = $usuario->pesquisar($_POST);
   } else{
    $load = $usuario->carregar();
   }
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="UsuarioList.php" method="post">
      <select name="campo">
        <option value="nome">Nome</option>
        <option value="telefone">Telefone</option>
      </select>
      <input type="text" name="valor"/>
      <input type="submit" value="Buscar"/>
    </form>
    <a href= "UsuarioForm.php">Cadastrar</a>
      <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
        <?php 
        foreach($load as $item){
       echo " <tr>
            <td>$item->id</td>
            <td>$item->nome</td>
            <td>$item->telefone</td>
            <td><a href='./UsuarioForm.php?id=$item->id'>Editar</a></td>
            <td><a href='./UsuarioList.php?id=$item->id'
                    onclick='return confirm(\"Deseja Excluir?\")'
            >Excluir</a></td>
            </tr>";
          } 
          ?>

      </table>
	</body>
</html>