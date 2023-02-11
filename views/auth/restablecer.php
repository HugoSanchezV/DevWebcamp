<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?? ''; ?></h2>
    <p class="auth__texto">coloca tu nuevo password</p>

    <?php
    require_once __DIR__ . "/../templates/alertas.php"
    ?>

    <?php if ($token_valido) : ?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Password</label>
                <input type="password" id="password" name="password" class="formulario__input" placeholder="Tu Password">
            </div>
            <input type="submit" class="formulario__submit" value="Guardar Password">
        </form>
    <?php endif; ?>


    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Obtener una</a>
    </div>
</main>