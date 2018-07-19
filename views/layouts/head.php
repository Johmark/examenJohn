<?php
function createDocHead($head='')
{
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Segundo Parcial</title>
      <link rel="stylesheet" href="public/css/master.css">
      <link rel="stylesheet" href="public/css/objects.css">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <?= $head; ?>
    </head>
    <body>
  <?php
}
 ?>
