
    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>
                    Suspendisse at diam mauris. Phasellus vulputate sem nec nunc rhoncus, non rhoncus quam gravida. Donec et erat velit. Suspendisse consectetur nisl et mollis rhoncus. Morbi luctus scelerisque ante, et semper urna. Curabitur aliquet ex quis felis mollis, et fringilla odio porttitor. Mauris suscipit eleifend erat ut bibendum. Etiam justo velit, consectetur volutpat ipsum non, gravida auctor massa. Duis lectus odio, maximus vitae interdum in, dignissim vitae justo. Aliquam semper libero ac interdum vulputate. Aliquam consequat a ligula quis auctor. Sed efficitur non eros sit amet commodo.
                </p>
                <p>
                    Praesent varius tincidunt risus, eget finibus leo interdum ac. Sed tincidunt lorem ex, ut placerat nunc suscipit non. In facilisis in elit vel pellentesque. Cras id maximus ex, eget faucibus sem. Etiam ut neque cursus, mollis ligula sit amet, cursus enim. Etiam sit amet pretium arcu, at mollis odio. Pellentesque sed sapien porta, finibus eros at, lacinia magna. Sed congue convallis faucibus.
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Etiam condimentum dolor libero, eget pellentesque dui fringilla ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer feugiat pellentesque justo, in pellentesque ex pellentesque eget.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Etiam condimentum dolor libero, eget pellentesque dui fringilla ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer feugiat pellentesque justo, in pellentesque ex pellentesque eget.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Etiam condimentum dolor libero, eget pellentesque dui fringilla ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer feugiat pellentesque justo, in pellentesque ex pellentesque eget.</p>
            </div>
        </div>
    </section>
    <?php
        incluirTemplate('footer');
    ?>
