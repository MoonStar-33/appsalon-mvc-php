<h1 class="nombre-pagina">Recupera tu Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuaciooon</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return ?>
<form class="formulario" method="post">
    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu Nuevo Password"
        />
    </div>
    <input class="boton" type="submit" value="Guardar Nuevo Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Obten Una</a>
</div>