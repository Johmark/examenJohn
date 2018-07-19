<?php
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
