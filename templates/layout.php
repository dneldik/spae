<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>spae</title>
</head>
<body style="background-color: #252530; color: gray">
  <ul>
  <li><a href="?action=list">show all</a></li>
  <li><a href="?action=create">create new</a></li>

  <div>
    <?php
      include_once("templates/pages/$page.php");
    ?>
  </div>
  </ul>
</body>
</html>