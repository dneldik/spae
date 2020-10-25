<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>spae</title>
  <link rel="stylesheet" type="text/css" href="./public/style.css">
</head>

<body>
  <div class="main-wrapper">
    <header class="border">
      <h1>
        Welcome to personal note system v. 1.0.0
      </h1>
    </header>

    <div class="content-wrapper">
      <nav class="border">
        <ul>
          <li><a href="?action=list">show all</a></li>
          <li><a href="?action=create">create new</a></li>
        </ul>
      </nav>

      <div class="content border">
        <?php
          include_once("templates/pages/$page.php");
          
        ?>
      </div>
    </div>

    <footer class="border">
      footer
    </footer>
  </div>
  
</body>
</html>