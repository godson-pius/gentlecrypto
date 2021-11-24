
<?php
require_once("db.php");
// function that checks if a file input is empty
function isset_file($name) {
    return (isset($_FILES[$name]) && $_FILES[$name]['error'] != UPLOAD_ERR_NO_FILE);
}

//function that handles the add course page
if(isset($_POST["add_course"])){
  trim(extract($_POST));


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


// Check if file already exists
if (file_exists($target_file)) {
  $sql_query = "INSERT INTO courses(course_name,course_detail,tutor,tutor_image) VALUES('$course','$detail','$tutor','$imgName')";
  if(mysqli_query($link,$sql_query)){
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

    $sql_query = "INSERT INTO courses(course_name,course_detail,tutor,tutor_image) VALUES('$course','$detail','$tutor','$imgName')";
  if(mysqli_query($link,$sql_query)){
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
}

else{
  $sql_query = "INSERT INTO courses(course_name,course_detail,tutor) VALUES('$course','$detail','$tutor')";
  if(mysqli_query($link,$sql_query)){
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

}




//function that handles the add Lesson page
if(isset($_POST["add_lesson"])){
  trim(extract($_POST));


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
    window.alert('Sorry an Error occured try again!');
    window.location.href='../add-lesson.php';
    </script>");
  }
  }
   else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry an Error occured try again!');
    window.location.href='../add-lesson.php';
    </script>");
  }

  
}


}

// for deleting a course
if(isset($_POST["delete_course"])){
  extract($_POST);
  $sql = "DELETE FROM courses where id = $id";
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

