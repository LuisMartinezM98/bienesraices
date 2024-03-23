
    <?php
        require 'includes/funciones.php';
        incluirTemplate('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>Suspendisse at diam mauris. Phasellus vulputate sem nec nunc rhoncus, non rhoncus quam gravida. Donec et erat velit. Suspendisse consectetur nisl et mollis rhoncus. Morbi luctus scelerisque ante, et semper urna. Curabitur aliquet ex quis felis mollis, et fringilla odio porttitor. Mauris suscipit eleifend erat ut bibendum. Etiam justo velit, consectetur volutpat ipsum non, gravida auctor massa. Duis lectus odio, maximus vitae interdum in, dignissim vitae justo. Aliquam semper libero ac interdum vulputate. Aliquam consequat a ligula quis auctor. Sed efficitur non eros sit amet commodo.</p>
            <p>Praesent varius tincidunt risus, eget finibus leo interdum ac. Sed tincidunt lorem ex, ut placerat nunc suscipit non. In facilisis in elit vel pellentesque. Cras id maximus ex, eget faucibus sem. Etiam ut neque cursus, mollis ligula sit amet, cursus enim. Etiam sit amet pretium arcu, at mollis odio. Pellentesque sed sapien porta, finibus eros at, lacinia magna. Sed congue convallis faucibus.</p>
        </div>
    </main>
    <?php
        incluirTemplate('footer');
    ?>
