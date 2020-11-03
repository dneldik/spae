<?php if(!$params['created']) : ?>

<h3>add a new note</h3>

<form class="add-note" action="?action=create" method="post">
  <ul>
    <li>
      <label for="form-add-title">Title</label><br>
      <input type="text" name="title" id="form-add-title">
    </li>
    <li>
      <label for="form-add-text">note content</label><br>
      <textarea name="content" id="form-add-text"></textarea>
    </li>
    <li>
      <input class="send" type="submit" value="send">
    </li>
  </ul>  
</form>

<?php else : ?>

<h3>you have added a new note</h3>
<p>
  <b>title:</b>
  <?php echo $params['title'] ?>
</p>
<p>
  <b>content:</b>
  <?php echo $params['content'] ?>
</p>

<?php endif; ?>
