<div class="evento">
    <p class="evento__hora"><?php echo $evento->hora->hora; ?></p>

    <div class="evento__informacion">
        <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>
        <div>
            <p class="evento__introduccion"><?php echo $evento->descripcion;  ?></p>
        </div>
        <div class="evento__autor-info">
            <picture>
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $evento->ponente->imagen; ?>.webp" type="image/webp">
                <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $evento->ponente->imagen; ?>.png" type="image/png">
                <img class="evento__imagen-autor" width="200" height="300" loading="lazy" width="100%" height="100%" src=".jpg" alt="Imagen Ponente">
            </picture>

            <p class="evento__autor_nombre">
                <?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido; ?>
            </p>
        </div>
        <button type="button" data-id="<?php echo $evento->id; ?>" class="evento__agregar" <?php echo ($eventos->disponibles === 0)? 'disabled': '';?> >
        <?php echo ($eventos->disponibles === 0)? 'Agotado': 'Agregar - ' . $evento->disponibles . " Disponibles" ;?> </button>
    </div>
</div>