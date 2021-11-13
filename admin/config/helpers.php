
<?php

function sanitize($input) {
  $input = htmlspecialchars(htmlentities(trim($input)));
  return $input;
}

function redirect($url) {
    header("Location: $url");
}

function blockUrlHackers($url, $user) {
  if (!isset($user)) {
      redirect($url);
  }
}
