<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?? ''; ?></h2>
    <p class="auth__texto">Registrate en DevWebcamp</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="formulario__input" placeholder="Tu Nombre" value="<?php echo $usuario->nombre; ?>">
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="formulario__input" placeholder="Tu Apellido" value="<?php echo $usuario->apellido; ?>">
        </div>
        
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" id="email" name="email" class="formulario__input" placeholder="Tu Email" value="<?php echo $usuario->email; ?>">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" id="password" name="password" class="formulario__input" placeholder="Tu Password">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input type="password" id="password2" name="password2" class="formulario__input" placeholder="Repetir Password">
        </div>

        <input type="submit" class="formulario__submit" value="Inicar Sesión">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidates tu Password?</a>
    </div>
</main>