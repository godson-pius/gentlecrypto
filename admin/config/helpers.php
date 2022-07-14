
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

function executeQuery($statement)
{
    global $link;

    $sql = $statement;
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row;
    } else {
        return false;
    }
}

function check_duplicate($table, $field, $sanitized_value)
{
    $sql = "SELECT * FROM $table WHERE $field = '$sanitized_value'";
    $result = executeQuery($sql);

    if ($result) {
        return true;
    }return false;
}

function check_duplicate_purchase($table, $field, $sanitized_value, $field2, $sanitized_value2)
{
    $sql = "SELECT * FROM $table WHERE $field = $sanitized_value AND $field2 = $sanitized_value2";
    $result = executeQuery($sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function get_course_name($id) {
    $sql = "SELECT course_name FROM courses WHERE course_id = $id";
    $result = executeQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}
