<?php

//idea - create a madlibs using user input and variables. 

$inspirationalQuote = '"You don\'t have to be great at something to get started but you do have to get started in order to be great at something."';
$quoteAuthor = 'Zig Ziglar';

$name = htmlspecialchars($_GET['name']);

$greeting = 'Hello, ' . $name . '. Did you know that ' . $quoteAuthor . ' once said, ' . $inspirationalQuote;

//"Hello, " . htmlspecialchars($_GET['name']) . "!";  //sanatizing our input using htmlspecialchars

require 'index.view.php'; 
