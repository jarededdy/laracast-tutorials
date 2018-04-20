<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <style>

      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }

    </style>
  </head>
  <body>
    <header>
      <h1><?=$person['Name']?>'s Bio</h1>
    </header>
      <ul>
        <?php foreach ($person as $key => $attribute) : ?>
          <li><strong><?= $key; ?></strong> : <?= $attribute; ?></li>
        <?php endforeach; ?>
      </ul>
  </body>
</html>
