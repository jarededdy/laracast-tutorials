<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laracast: Arrays Lesson</title>
    <style>

      .lesson li, .homework li {
        background: #e3e3e3;
        padding: 10px;
        margin:20px;
        display:inline-block;
      }
      .homework li {
        background:#ff0000;
        color:#fff;
      }
      .lesson li:hover {
        background:#000;
        color:#fff;
      }
      .homework li:hover {
        background:#0000ff;
      }

    </style>
  </head>
  <body>

    <!-- Lesson Code Below -->
    <div class="lesson">
      <h1>My Family Members</h1>
      <ul>
        <h2>Original Syntax</h2>
        <?php
          foreach ($names as $name) {
            echo "<li>$name</li>";
          };
        ?>
        <h2>Alternative Syntax</h2>
        <!-- Alternate Syntax -->
        <?php foreach ($names as $name) : ?>
         <li><?= $name; ?></li>
        <?php endforeach ?>
      </ul>
    </div>

    <!-- Homework Code Below -->
    <div class="homework">
      <h1>Some Random Animals</h1>
      <ul>
        <?php

          foreach ($animals as $animal) {
            echo "<li>$animal</li>";
          };

        ?>
      </ul>
    <div>

  </body>
</html>
