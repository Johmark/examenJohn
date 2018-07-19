<?php
include "head.php";
function createMainHeader($head='')
{
  createDocHead();
  ?>
  <header>
    <div class="container">
      <a class="logo" href="index.php">ISC BLOG</a>
      <input type="search" placeholder="Search" class="form_input">
      <a href="new_post.php">
        <button type="button" name="button" class="btn">New Post</button>
      </a>
    </div>
  </header>
  <?php
}
 ?>
