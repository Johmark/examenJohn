<?php
include "views/layouts/main_header.php";
include "views/layouts/main_footer.php";
include "app/functions.php";

createMainHeader();
 ?>
  <p class="title">Mostrando Publicaciones Recientes</p>
  <p class="maincontent">
    <!-- el contenido de la pagina ira aqui -->
    <?php
      generatePost($titulo,  $fecha, $contenido);
      recuestPosts();
    ?>
  </p>
<?php
createMainFooter();
 ?>
