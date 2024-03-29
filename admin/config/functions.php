<?php
require_once("db.php");
// function that checks if a file input is empty
function isset_file($name) {
    return (isset($_FILES[$name]) && $_FILES[$name]['error'] != UPLOAD_ERR_NO_FILE);
}

// echo "dd";
// echo getSingleCourse("Advanced Class");

//function that handles the add course page
if(isset($_POST["add_course"])){
    trim(extract($_POST));

    $tutor = str_replace("'", "&apos;", "$tutor");
    $detail = str_replace("'", "&apos;", "$detail");

  $target_dir = "../../tutor_images/";

  if(isset_file('fileToUpload')) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imgName = basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } 
    else {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Please upload only an Image');
      window.location.href='../add-course.php';
      </script>");
      $uploadOk = 0;
    }

    if (!check_duplicate('courses', 'course_name', sanitize($course))) {
      $course_name = sanitize($course);
      $course_name = str_replace("'", "&apos;", "$course_name");
    } else {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Course already exists!');
      window.location.href='../add-course.php';
      </script>");
    }
    

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Please Upload only an image File');
      window.location.href='../add-course.php';
      </script>");
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 1){
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      $sql_query = "INSERT INTO courses(course_name,course_detail,course_price,course_video,tutor,tutor_image) VALUES('$course_name','$detail','$price', '$video','$tutor','$imgName')";

    if(mysqli_query($link, $sql_query)){

      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Course Added Successfully');
      window.location.href='../add-course.php';
      </script>");
    }
    else{
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Sorry an Error occured try again!');
      window.location.href='../add-course.php';
      </script>");
    }
    }
    else {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Sorry an Error occured try again!');
      window.location.href='../add-course.php';
      </script>");
    }

    
  }
    else{
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Sorry an Error occured try again!');
      window.location.href='../add-course.php';
      </script>");
    } 
  }

}




//function that handles the add Lesson page
if(isset($_POST["add_lesson"])){
  trim(extract($_POST));

  $detail = str_replace("'", "&apos;", "$detail");
  $topic = str_replace("'", "&apos;", "$topic");


$target_dir = "../../lesson_videos/";

  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $videoName = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry This Lesson Already Exists Please Upload an Updated Video!');
    window.location.href='../add-lesson.php';
    </script>");
  
}

// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "mkv" && $imageFileType != "WEBM"
&& $imageFileType != "WMV" && $imageFileType != "FLV" ) {
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please Upload only a Video File');
    window.location.href='../add-lesson.php';
    </script>");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1){
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    $sql_query = "INSERT INTO lessons(course_id,lesson_detail,topic,video,price) VALUES('$course','$detail','$topic','$videoName','$price')";
  if(mysqli_query($link,$sql_query)){
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('Lesson Added Successfully');
    window.location.href='../add-lesson.php';
    </script>");
  }
  else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry an Error occured try again!Query');
    window.location.href='../add-lesson.php';
    </script>");
  }
  }
   else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry an Error occured try again!File');
    window.location.href='../add-lesson.php';
    </script>");
  }

  
}


}

if(isset($_POST['edit_course'])) {
  extract($_POST);
}

// for deleting a course
if(isset($_POST["delete_course"])){
  extract($_POST);
  $sql = "DELETE FROM courses WHERE course_id = '$id'";
  if(mysqli_query($link, $sql)){
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('Course Deleted Successfully');
    window.location.href='../courses.php';
    </script>");

  }

  else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('An Error occured Try again later!');
    window.location.href='../courses.php';
    </script>");
  }
}


if(isset($_POST["register"])){
  trim(extract($_POST));
  $emailcheck = "SELECT * from users where email = '$mail'";
$emailcheckresult = mysqli_query($link,$emailcheck);
      $countcheck = mysqli_num_rows($emailcheckresult);

    if($countcheck != 0){
      echo "This Email Address already exists";
    }
    else{
  $sql_query = "INSERT INTO users(first_name,last_name,email,phone,password) VALUES('$fname','$lname','$mail', '$phone', MD5('$pass'))";
  if(mysqli_query($link,$sql_query)){
    echo "success";
  }
  else{
    echo "Error Please try again Later!";
  }
}

}


if(isset($_POST["login"])){
  trim(extract($_POST));
  $emailcheck = "SELECT * from users where email = '$mail'";
$emailcheckresult = mysqli_query($link,$emailcheck);
      $countcheck = mysqli_num_rows($emailcheckresult);

    if($countcheck == 0){
      echo "This Email Address does not exist";
    }
    else{
      $passcheck = "SELECT * from users where email = '$mail' && password = MD5('$pass')";
      $passcheckresult = mysqli_query($link,$passcheck);
      $countcheck2 = mysqli_num_rows($passcheckresult);

    if($countcheck2 == 0){
      echo "This Password is Incorrect";
    }
    else{
      $row = mysqli_fetch_array($passcheckresult, MYSQLI_ASSOC);
        $id = $row["id"];

      // session_start();
      $_SESSION["user"] = "logged";
      $_SESSION["id"] = $id;
      if($rem != 0){
        $time = time() + 86400;
        setcookie('pass',$pass,$time);
       }
      echo "success";
}
}

}

if(isset($_POST["loginAdmin"])){
  trim(extract($_POST));
  $emailcheck = "SELECT * from admins where email = '$mail'";
$emailcheckresult = mysqli_query($link,$emailcheck);
      $countcheck = mysqli_num_rows($emailcheckresult);

    if($countcheck == 0){
      echo "This Email Address does not exist";
    }
    else{
      $passcheck = "SELECT * from admins where email = '$mail' && password = MD5('$pass')";
      $passcheckresult = mysqli_query($link,$passcheck);
      $countcheck2 = mysqli_num_rows($passcheckresult);

    if($countcheck2 == 0){
      echo "This Password is Incorrect";
    }
    else{
      $row = mysqli_fetch_array($passcheckresult, MYSQLI_ASSOC);
        $id = $row["id"];

      // session_start();
      $_SESSION["admin"] = "logged";
      $_SESSION["adminId"] = $id;
      if($rem != 0){
        $time = time() + 86400;
        setcookie('pass',$pass,$time);
       }
      echo "success";
}
}

}

function addEvent($post) {
  global $link;

  $errors = [];
  extract($post);


  $content = str_replace("'", "&apos;", "$content");

  if (!empty($title)) {
    if (!check_duplicate('events', 'title', sanitize($title))) {
      $title = sanitize($title);
      $title = str_replace("'", "&apos;", "$title");
    } else {
      $errors[] = 'Event already exists';
    }
  } else {
    $errors[] = 'Title is required';
  }

  if (isset($date)) {
    $date = $date;
  } else {
    $errors[] = 'Date is required';
  }

  if (isset($time)) {
    $time = $time;
  } else {
    $errors[] = 'Time is required';
  }

  if (!empty($venue)) {
    $venue = sanitize($venue);
    $venue = str_replace("'", "&apos;", "$venue");
  } else {
    $errors[] = 'Venue is required';
  }

  if (!empty($_FILES['image'])) {
    $image = sanitize($_FILES['image']['name']);
    $imageTmp = sanitize($_FILES['image']['tmp_name']);
    move_uploaded_file($imageTmp, "../img/$image");
  } else {
    $errors[] = 'Image is required';
  }

  if (!empty($content)) {
    $content = $content;
  } else {
    $errors[] = 'Content is required';
  }

  if (!$errors) {
    $sql = "INSERT INTO events (title, event_image, content, event_date, event_time, venue) VALUES ('$title', '$image', '$content', '$date', '$time', '$venue')";

    $query = mysqli_query($link, $sql);

    if ($query) {
      return true;
    } else {
      return false;
    }
  } else {
    return $errors;
  }
}

function addProduct($post) {
  global $link;

  $errors = [];
  extract($post);

  $details = str_replace("'", "&apos;", "$details");

  if (!empty($p_name)) {
    if (!check_duplicate('products', 'p_name', sanitize($p_name))) {
      $p_name = sanitize($p_name);
      $p_name = str_replace("'", "&apos;", "$p_name");
    } else {
      $errors[] = 'Product already exists';
    }
  } else {
    $errors[] = 'Product Name is required';
  }

  if (!empty($p_price)) {
    $p_price = sanitize($p_price);
  } else {
    $errors[] = 'Product price is required';
  }

  if (!empty($_FILES['image'])) {
    $image = sanitize($_FILES['image']['name']);
    $imageTmp = sanitize($_FILES['image']['tmp_name']);
    move_uploaded_file($imageTmp, "../img/$image");
  } else {
    $errors[] = 'Image is required';
  }

  if (!empty($details)) {
    $details = $details;
  } else {
    $errors[] = 'Product details is required';
  }

  if (!$errors) {
    $sql = "INSERT INTO products (p_name, p_price, p_image, p_details) VALUES ('$p_name', '$p_price', '$image', '$details')";

    $query = mysqli_query($link, $sql);

    if ($query) {
      return true;
    } else {
      return false;
    }
  } else {
    return $errors;
  }
}

function editEvent($post, $id) {
  global $link;

  extract($post);

  $title = sanitize($title);
  $date = sanitize($date);
  $time = sanitize($time);
  $venue = sanitize($venue);

  $title = str_replace("'", "&apos;", "$title");
  $venue = str_replace("'", "&apos;", "$venue");

  if (isset($_FILES['image'])) {
    $image = sanitize($_FILES['image']['name']);
    $imageTmp = sanitize($_FILES['image']['tmp_name']);
    move_uploaded_file($imageTmp, "../img/$image");
  }

  $content = sanitize($content);

  $sql = "UPDATE events SET title = '$title', event_date = '$date', event_time = '$time', venue = '$venue', content = '$content', event_image = '$image', updated_at = now() WHERE id = '$id'";

  $query = mysqli_query($link, $sql);

  if ($query) {
    return true;
  } else {
    return false;
  }
  
}

function editProduct($post, $id) {
  global $link;

  extract($post);

  $p_name = sanitize($p_name);
  $p_price = sanitize($p_price);
  $p_details = sanitize($details);

  $p_name = str_replace("'", "&apos;", "$p_name");
  $p_details = str_replace("'", "&apos;", "$p_details");

  if (isset($_FILES['image'])) {
    $image = sanitize($_FILES['image']['name']);
    $imageTmp = sanitize($_FILES['image']['tmp_name']);
    move_uploaded_file($imageTmp, "../img/$image");
  }

  $sql = "UPDATE products SET p_name = '$p_name', p_price = '$p_price', p_details = '$p_details', p_image = '$image', updated_at = now() WHERE id = '$id'";

  $query = mysqli_query($link, $sql);

  if ($query) {
    return true;
  } else {
    return false;
  }
  
}

function editCourse($post, $id) {
  global $link;

  extract($post);

  $tutor = sanitize($tutor);
  $course = sanitize($course);
  $cprice = sanitize($price);

  $tutor = str_replace("'", "&apos;", "$tutor");
  $course = str_replace("'", "&apos;", "$course");
  $detail = str_replace("'", "&apos;", "$detail");

  if (isset($_FILES['fileToUpload'])) {
    $image = sanitize($_FILES['fileToUpload']['name']);
    $imageTmp = sanitize($_FILES['fileToUpload']['tmp_name']);
    move_uploaded_file($imageTmp, "../img/$image");
  }

  $sql = "UPDATE courses SET course_name = '$course', course_detail = '$detail', course_price = '$cprice', course_video = '$video', tutor = '$tutor', tutor_image = '$image' WHERE course_id = '$id'";

  $query = mysqli_query($link, $sql);

  if ($query) {
    return true;
  } else {
    return false;
  }
  
}

function editLesson($post, $id) {
  global $link;

  extract($post);

  $date = $date;
  $course = sanitize($course);
  $topic = sanitize($topic);
  $detail = sanitize($detail);

  $topic = str_replace("'", "&apos;", "$topic");
  $detail = str_replace("'", "&apos;", "$detail");

  if (isset($_FILES['fileToUpload'])) {
    $video = sanitize($_FILES['fileToUpload']['name']);
    $videoTmp = sanitize($_FILES['fileToUpload']['tmp_name']);
    move_uploaded_file($videoTmp, "../lesson_videos/$video");
  }

  $sql = "UPDATE lessons SET course_id = $course, lesson_detail = '$detail', topic = '$topic', video = '$video', price = '$price' WHERE id = $id";

  $query = mysqli_query($link, $sql);

  if ($query) {
    return true;
  } else {
    return false;
  }
  
}

function getAll($table) {
  global $link;

  $sql = "SELECT * FROM $table";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    return $query;
  } else {
    return false;
  }
}

function getSingleEvent($title) {
  global $link;

  $sql = "SELECT * FROM events WHERE title = '$title'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    return $query;
  } else {
    return false;
  }
}

function getSingleProduct($name) {
  global $link;

  $sql = "SELECT * FROM products WHERE p_name = '$name'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    return $query;
  } else {
    return false;
  }
}

function getSingleCourse($name) {
  global $link;

  $sql = "SELECT * FROM courses WHERE course_name = '$name'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    return $row;
  } else {
    return false;
  }
}

function getSingleColumn($table, $column, $value) {
  global $link;

  $sql = "SELECT * FROM $table WHERE $column = '$value'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    return $query;
  } else {
    return false;
  }
}

function getAllFromTable($table, $limit) {
  global $link;

  $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $limit";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    return $query;
  } else {
    return false;
  }
}

function currentUser($id) {
  global $link;

  $sql = "SELECT * FROM users WHERE id = '$id'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
    return $query;
  } else {
    return false;
  }
}

function deleteColumn($table, $id) {
  global $link;

  $sql = "DELETE FROM $table WHERE id = '$id'";
  $query = mysqli_query($link, $sql);

  if ($query) {
    return true;
  } else {
    return false;
  }
}

function getTotalUserCourse($id) {
  global $link;

  $sql = "SELECT * FROM course_payments WHERE user_id = '$id' AND approve = 1";
  $query = mysqli_query($link, $sql);

  if ($query) {
      return mysqli_num_rows($query);
  } else {
    return false;
  }
}

function getTotalNum($table) {
  global $link;

  $sql = "SELECT * FROM $table";
  $query = mysqli_query($link, $sql);

  if ($query) {
    return mysqli_num_rows($query);
  } else {
    return false;
  }
}

function getAllUserCourse($id) {
  global $link;

  $sql = "SELECT * FROM courses INNER JOIN course_payments ON courses.course_id = course_payments.course_id WHERE course_payments.user_id = $id AND course_payments.approve = 1";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}

function getCourseLesson($id) {
  global $link;

  $sql = "SELECT * FROM lessons INNER JOIN courses ON lessons.course_id = courses.course_id WHERE courses.course_id = '$id'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      return $query;
  } else {
    return false;
  }
}

function getUserName($id) {
  global $link;

  $sql = "SELECT * FROM users WHERE id = '$id'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      foreach ($query as $user) {
        return $user['email'];
      }
  } else {
    return false;
  }
}

function getProductName($id) {
  global $link;

  $sql = "SELECT * FROM products WHERE id = '$id'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      foreach ($query as $product) {
        return $product['p_name'];
      }
  } else {
    return false;
  }
}

function getCourseName($id) {
  global $link;

  $sql = "SELECT * FROM courses WHERE course_id = '$id'";
  $query = mysqli_query($link, $sql);

  if (mysqli_num_rows($query) > 0) {
      foreach ($query as $product) {
        return $product['course_name'];
      }
  } else {
    return false;
  }
}

function update_brand($post, $name) {
  global $link;

  $errors = [];
  extract($post);

  if (!empty($info)) {
    $info = $info;
  } else {
    $errors[] = 'Content is required';
  }

  if (!$errors) {
    if ($name === "terms") {
      $sql = "UPDATE brand_infos SET terms = '$info'";
    } else if ($name === "policy") {
      $sql = "UPDATE brand_infos SET policy = '$info'";
    }

    $query = mysqli_query($link, $sql);

    if ($query) {
      return true;
    } else {
      return false;
    }
  } else {
    return $errors;
  }
}
