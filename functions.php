<?php

// die and dump function BEGIN
function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
};
// die and dump function END

function checkAge($age) {
  if ($age < 21) {
    echo 'You are not old enough!<br/>';
  } else {
    echo 'Come on in!<br/>';
  };
};
