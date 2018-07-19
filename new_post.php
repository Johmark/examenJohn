<?php
include "views/layouts/main_header.php";
include "views/layouts/main_footer.php";

session_start();
createMainHeader();
?>
<h3 class="title">Adding new Post</h3>
<?php if (isset($_SESSION['messages'])): ?>
<div class="errors">
  <?php  echo $_SESSION['messages']; unset($_SESSION['messages']); ?>
</div>
<?php endif; ?>
<form action="app/validatePost.php" method="post">
  <div class="new">
    <input type="text" name="Post_title" placeholder="Your Post Title"
    class="newTitle">
  </div>
  <div class="new">
    <textarea name="Text1" cols="40" rows="5" class="newTitle newContend"
       placeholder="Your post Contend"></textarea>
    <!-- <input type="text" name="Post_Conted" placeholder="Your post Contend"
    class="newTitle newContend"> -->
  </div>
  <div class="buttons">
    <input type="submit" name="submit" value="Submit Post" class="btn submit">
    <input type="button" name="cancel" value="Cancel" class="btn cancel">
  </div>
</form>

<?php
createMainFooter();
 ?>
