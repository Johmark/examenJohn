<?php
include "views/layouts/object.php";
$titulo = 'Este es un Ejemplo de como queda un post';
$fecha ='7/13/2018';
$contenido = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
laborum.";

function SystemDate()
{
  //la usamos para optener la fecha del sistema pero al final no la use.
  $toDay = getdate();
  return $toDay['month']." ".$toDay['mday']." ".$toDay['year'];
}

function recuestPosts()
{
  //conectamos con la base de datos
  $connection = new mysqli('localhost', 'root', '', 'block');
  session_start();

  //Si la connecion falla,mostramos el mensaje correspondiente en la pantalla
  if ($connection->connect_errno)
  {
      echo "Fallo la conexion a MYSQL (possition 1) ($connection->connect_errno) $connection->connect_error";
  }
  else {
    $value = $connection->query("SELECT * FROM posts");
    for ($i=0; $i <strlen($value); $i++) {
      $titulo = $valor[i].'title';
      $date = $valor[i].'date';
      $contend = $valor[i].'contend';
      generatePost($titulo, $date, $contend);
    }
  }
}

function generatePost(string $title, string $date, string $contend)
{
  ?>
    <div class="post">
      <div class="postitle">
        <p class="docTitle"><?=$title;?><br />
          <span class="docDate"><?=$date;?></span></p>
        <div class="postcontend">
          <p class="docContend"><?=$contend;?></p>
        </div>
      </div>
    </div>
  <?php
}
 ?>
