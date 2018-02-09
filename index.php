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
      <h1>
        <?php

          //idea - create a madlibs using user input and variables. 

          $inspirationalQuote = '"You don\'t have to be great at something to get started but you do have to get started in order to be great at something."';
          $quoteAuthor = 'Zig Ziglar';

          $name = htmlspecialchars($_GET['name']);

          echo 'Hello, ' . $name . '. Did you know that ' . $quoteAuthor . ' once said, ' . $inspirationalQuote;

        ?>
      </h1>

      <!-- <h2>
        <?= "Hello, " . htmlspecialchars($_GET['name']) . "!"; ?> //sanatizing our input using htmlspecialchars
      </h2> -->
    </header>
  </body>
</html>
