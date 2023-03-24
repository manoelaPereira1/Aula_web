<?php 
include "../controller/UsuarioController.php";

$usuario = new UsuarioController();

 if(!empty($_POST['id'])){
  $usuario->update($_POST);
}
elseif(!empty($_POST)){
  $usuario->salvar($_POST);
}
if(!empty($_GET['id'])){
  $data=$usuario->buscar($_GET['id']);
}

?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
        <form action="UsuarioForm.php" method="POST">
            <input type="hidden" name="id" value ="<?php echo !empty ($data->id) ?  $date->id :"" ?>"/><br>
            <label>Nome</label><br>
            <input type="text" name="nome" value="<?php echo !empty  ($date->nome) ? $date->nome: ""?>"/><br>
            <label>Telefone</label><br>
            <input type="text" name="telefone" value="<?php echo !empty  ($date->telefone) ? $date->telefone : ""?>"/><br>

            <input type="submit" value="Salvar"/>
        </form>

	</body>
</html> 