
    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono Wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                    <p>3</p>
                </li>
            </ul>
            <p>Suspendisse at diam mauris. Phasellus vulputate sem nec nunc rhoncus, non rhoncus quam gravida. Donec et erat velit. Suspendisse consectetur nisl et mollis rhoncus. Morbi luctus scelerisque ante, et semper urna. Curabitur aliquet ex quis felis mollis, et fringilla odio porttitor. Mauris suscipit eleifend erat ut bibendum. Etiam justo velit, consectetur volutpat ipsum non, gravida auctor massa. Duis lectus odio, maximus vitae interdum in, dignissim vitae justo. Aliquam semper libero ac interdum vulputate. Aliquam consequat a ligula quis auctor. Sed efficitur non eros sit amet commodo.</p>
            <p>Praesent varius tincidunt risus, eget finibus leo interdum ac. Sed tincidunt lorem ex, ut placerat nunc suscipit non. In facilisis in elit vel pellentesque. Cras id maximus ex, eget faucibus sem. Etiam ut neque cursus, mollis ligula sit amet, cursus enim. Etiam sit amet pretium arcu, at mollis odio. Pellentesque sed sapien porta, finibus eros at, lacinia magna. Sed congue convallis faucibus.</p>
        </div>
    </main>
    <?php
        incluirTemplate('footer');
    ?>
