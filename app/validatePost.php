<?php
//creando conecion con la base de datos
$connection = new mysqli('localhost', 'root', '', 'block');
session_start();

//Si la connecion falla,mostramos el mensaje correspondiente en la pantalla
if ($connection->connect_errno)
{
    echo "Fallo la conexion a MYSQL (possition 1) ($connection->connect_errno) $connection->connect_error";
}

$postitle = $_POST['Post_title'];
$postcontend = $_POST['Text1'];

//validacion si hay informacion
if (!empty($postitle))
{
  if (!empty($postcontend))
  {
    //verificamos si ya existe un post con ese titulo
    $result = $connection->query("SELECT * FROM posts WHERE title='$postitle'");

    if ($result->num_rows > 0) {
      $_SESSION['messages'] = "This title is already used please change it";
    }
  }
  else {
    $_SESSION['messages'] = "Your post had a Title but the content was missing";
  }
}
else {
  $_SESSION['messages'] = "You need a title to upload your post";
}

//validamos la informacion y la subimos a la base de datos
if (isset($_SESSION['messages']))
{
  header("Location: http://localhost/segundo_examen/examenJohn/new_post.php");
  exit();
}
else
{
  $result = $connection->query(
  "INSERT INTO posts (title, content, date) ".
  "VALUES('$postitle', '$postcontend', CURDATE())");

    if ($result) {
      header("Location: http://localhost/segundo_examen/examenJohn/index.php");
      exit();
    } else {
      echo "Fallo la conexion a MYSQL (possition 2) ($connection->connect_errno) $connection->connect_error";
      var_dump($result);
  }
}
 ?>
