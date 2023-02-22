<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importannte de Latinoamérica</p>

    <div data-aos="<?php echo aos_animacion(); ?>" class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">

                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen devwebcamp">
            </picture>
        </div>


        <div data-aos="<?php echo aos_animacion(); ?>" class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Phasellus lorem ante, consequat in efficitur at, commodo ac ligula. In justo ante, venenatis non massa ut, ultricies tincidunt urna. Pellentesque ut mollis velit, at lobortis mauris. Morbi fermentum magna nibh, non porta ante ultricies sed. Donec ornare scelerisque sapien, id venenatis nulla imperdiet nec. Duis at maximus quam.</p>
            <p class="devwebcamp__texto">Phasellus lorem ante, consequat in efficitur at, commodo ac ligula. In justo ante, venenatis non massa ut, ultricies tincidunt urna. Pellentesque ut mollis velit, at lobortis mauris. Morbi fermentum magna nibh, non porta ante ultricies sed.</p>
        </div>

    </div>
</main>