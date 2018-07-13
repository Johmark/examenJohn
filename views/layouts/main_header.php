<?php
include "head.php";
function createMainHeader($head='')
{
  createDocHead();
  ?>
  <header>
    <div class="container">
      <a class="logo" href="./">BRANT BLOG</a>
      <input type="search" placeholder="Search" class="form_input">
      <a href="views/new_post.php">
        <button type="button" name="button" class="btn">New Post</button>
      </a>
    </div>
  </header>
  <?php
}
 ?>
