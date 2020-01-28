<?php

require "config.php";

if (isset($_POST['submit'])) {

    $sql = "SELECT *
    FROM usuarios
    WHERE ciudad = :ciudad";

try {
    $statement = $conexion->prepare($sql);
    $statement->bindParam(':ciudad', $_POST['ciudad'], PDO::PARAM_STR);
    $statement->execute();

    $resultado = $statement->fetchALL();

} catch(PDOException $error) {
    echo $error->getMessage();
    }
}
?>

<?php require "templates/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
   if ($resultado && $statement->rowCount() > 0) { ?>
     <h2>Resultados</h2> 

     <tables>
       <thead>
         <tr>
            <th>uduariosid</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>email</th>
            <th>edad</th>
            <th>ciudad</th>
         </tr>
        </thead>
     </tables>
     <tbody>
     <?php foreach ($resultado as $file) : ?>
       <tr>
          <td><?php echo $fila["uduariosid"]; ?></td>
          <td><?php echo $fila["nombre"]; ?></td>
          <td><?php echo $fila["apellidos"]; ?></td>
          <td><?php echo $fila["email"]; ?></td>
          <td><?php echo $fila["edad"]; ?></td>
          <td><?php echo $fila["ciudad"]; ?></td>
        </tr>
     <?php endforeach; ?>
     </tbody>
    </table>
     <?php } else { ?> 
       <blockquote>NO hay usuarios pertenecientes a la ciudad <?php echo $_POST['ciudad']; ?>.</blockquote>
     <?php }
} ?>

<h2>Buscar unusuario según ciudad</h2>

<form method="post">
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad">
    <input type="submit" name="submit" id="Buscar">
</form>

<a href="index.php">Volver</a>

<?php require "templates/footer.php"; ?>

