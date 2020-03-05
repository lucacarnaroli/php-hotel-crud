<?php
  include_once __DIR__ . '/../env.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo $basePath ?>dist/app.css">
    <title>php-hotel-crud</title>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark">
        <div class="navbar-brand"><h2>Hotel Boolean</h2></div>
        <ul class="navbar-nav">
          <li><a href="<?php echo $basePath ?>">Tutte le stanze</a></li>
        </ul>
      </nav>
    </header>

    <div class="wrapper mt-4">

<?php include 'footer.php'; ?>
