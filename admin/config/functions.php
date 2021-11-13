
<?php

function login($post) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($email)) {
      $admin_email = sanitize($email);
  } else {
      $errors[] = "Specify an email";
  }

  if (!empty($password)) {
      $tmp_admin_password = sanitize($password);
      $admin_password = sha1($tmp_admin_password);
  } else {
      $errors[] = "Specify a password";
  }

  if (!$errors) {
      $sql = "SELECT * FROM admins WHERE email = '$admin_email'";
      $query = mysqli_query($link, $sql);

      if (mysqli_num_rows($query) > 0) {
          $rows = mysqli_fetch_assoc($query);

          if ($rows['password'] === $admin_password) {
              if (isset($remember)) {
                  setcookie("admin_email", $admin_email, time() + (345600 * 30), "/");
                  setcookie("admin_password", $admin_password, time() + (345600 * 30), "/");
              }
              $_SESSION['admin'] = $rows['id'];
              return true;
          } else {
            return false;
          }
      } else {
          $errors[] = "Invalid credentials";
      }
  } else {
    return $errors;
  }


}

function register() {

}
