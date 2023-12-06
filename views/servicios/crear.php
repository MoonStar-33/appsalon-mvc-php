<h1 class="nombre-pagina">Crear Servicio</h1>
<p class="descripcion-pagina">Llena todos los campos para añidir un nuevo servicio</p>

<?php 
    include __DIR__ . '/../templates/barra.php';
    include __DIR__ . '/../templates/alertas.php';
?>

<form action="/servicios/crear" method="post" class="formulario">
    <?php 
        include_once  __DIR__ . '/formulario.php';
    ?>
    <input type="submit" class="boton" value="Guardar Servicio">
</form>