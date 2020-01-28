<?php

require "config.php";

if (isset($_POST['submit'])) {

    $nuevo_usuario = array(
        "nombre" => $_POST['nombre'],
        "apellidos" => $_POST['apellidos'],
        "email" => $_POST['email'],
        "edad" => $_POST['edad'],
        "ciudad" => $_POST['ciudad']
    );
    
    $sql = "INSERT INTO usuario (nombre, apellidos, email, edad, ciudad) 
    values (:nombre, :apellidos, :email, :edad, :ciudad)";

try {
    $statement = $conexion->prepare($sql);
    $statement->execute($nuevo_usuario);
} catch(PDOException $error) {
    echo $error->getMessage();
    }
}
?>

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
      <blockquote><?php echo $_POST['nombre']; ?> se ha añadido correctamente.</blockquote>
<?php endif; ?>

<h2>Añade un usuario</h2>

<form method="post">
    <label for="nombre">Nombre</label>
    <input type="test" name="nombre" id="nombre">
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad">
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad">
    <input type="submit" name="submit" id="Añadir">
</form>

<a href="index.php">Volver</a>

<?php require "templates/footer.php"; ?>
