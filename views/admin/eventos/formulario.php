<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">
        Información del Evento
    </legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre del Evento" value="<?php echo $evento->nombre ?? ''; ?>">
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <textarea rows="8" class="formulario__input" id="descripcion" name="descripcion" placeholder="Descripción Evento" value="<?php echo $evento->descripcion ?? ''; ?>"></textarea>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoria o Tipo de Evento</label>
        <select class="formulario__select" name="categoria_id" id="categoria">
            <option> --Seleccionar-- </option>
            <?php foreach ($categorias as $categoria) : ?>
                <option <?php echo $categoria->id === $evento->categoria_id?'selected':''; ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Selecciona el dia</label>

        <div class="formulario__radio">
            <?php foreach ($dias as $dia) : ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                    <input type="radio" id="<?php echo strtolower($dia->nombre); ?>" name="dia" value="<?php echo $dia->id; ?>">
                </div>
            <?php endforeach; ?>
        </div>

        <input type="hidden" name="dia_id" value="">
    </div>

    <div class="horas" class="formulario__campo" id="horas">
        <label class="formulario__label">Seleccionar Hora</label>

        <ul class="horas" id="horas">
            <?php foreach ($horas as $hora) : ?>
                <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitado"><?php echo $hora->hora; ?></li>
            <?php endforeach; ?>
        </ul>
        <input type="hidden" name="hora_id" value="">
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Ponente</label>
        <input type="text" class="formulario__input" id="ponentes" name="ponentes" placeholder="Buacar Ponente">
    </div>

    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input type="number" min="1" class="formulario__input" id="disponibles" name="disponibles" placeholder="Ej.20">
    </div>
</fieldset>