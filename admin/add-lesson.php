<?php
  require_once 'config/db.php';
  //blockUrlHackers('pages-login.php', $_SESSION['admin']);

?>
<?php require_once 'inc/header.php'; ?>
<style type="text/css">
/** style to hide the errors till an error occours **/
#video_error, #price_error, #detail_error, #topic_error{
        display:none;
        color: red;
    }
            .filebutton {
    width:30%;
    height:35px;
    padding-left:2%;
    padding-top:0.3%;
    overflow:hidden;
    position:relative;
    font-size: 16px;
    border-radius:20px;
    cursor: pointer;
    margin-top:3%;
    color: white;
    background-color:blue;
    border:1px solid blue;
    
    font-weight: bolder;
}
.fa-plus{
    margin-left:5px;
    margin-top:2%;
}

#fil input{
    z-index: 999;
    line-height: 0;
    font-size: 50px;
    position: relative;
    margin-top: -15px;
    margin-left: -800px;
    height:50px;
    opacity: 0;
    filter: alpha(opacity = 0);
    -ms-filter: "alpha(opacity=0)";
    cursor: pointer;
    margin-right:0px;
}
        </style>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-20 m-b-20">

                                    <h4 class="header-title m-t-0">ADD A LESSON</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Give detailed Informations
                                    </p>

                                    <div class="m-b-20">
                                        <form onsubmit="return validate();" enctype="multipart/form-data" action="config/functions.php" class="form-validation" method="POST" novalidate>

                                            <div class="form-group">
                                                <label for="emailAddress">Date Added<span class="text-danger">*</span></label>
                                                <input type="text"  readonly name="date" value="<?php echo date('d'.'-'.'m'.'-'.'Y'); ?>" parsley-trigger="change" class="form-control bg-light" id="date">
                                            </div>
                                            <input type="hidden" id="val" value="1">

                                            <div class="form-group">
                                               
                                                    <?php
                                                    $course_select_query = "SELECT * FROM courses order by id DESC";
                                                    $course_select_result = mysqli_query($link,$course_select_query);
                                                    $count_courses = mysqli_num_rows($course_select_result);
                                                    if($count_courses != 0){

                                                    ?>
                                                     <label for="course">Select Course<span class="text-danger">*</span></label>
                                                <select name="course" style="color: black !important;" class="form-control">
                                                    <?php 
                                                    while($course_rows = $course_select_result->fetch_assoc()){
                                                        $course_id = $course_rows["id"];
                                                        $course_name = $course_rows["course_name"];


                                                    ?>
                                                    <option style="color: black !important;" value="<?php echo $course_id ?>"><?php echo $course_name ?></option>

                                                    <?php 
                                                    }
                                                    }
                                                    else{
                                                        ?>
                                                        <label for="course" class="text-danger"><i class="fa fa-exclamation-triangle error" aria-hidden="true"></i>NO COURSE ADDED YET!<span class="text-light">****</span><br><span class="text-warning">Please Add a course before you can add any lesson</span></label>
                                                        <script type="text/javascript">document.getElementById("val").value = 0;</script>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">Lesson Topic<span class="text-danger">*</span></label>
                                                <input type="text" name="topic" parsley-trigger="change" required
                                                       placeholder="Enter Lesson Topic" class="form-control" id="topic">
                                                       <i class="fa fa-exclamation-triangle error" id="topic_error" aria-hidden="true"></i>
                                            </div>
                                             <div class="form-group">
                                                <label for="userName">Enter Amount to Sell Lesson<span class="text-danger">*</span></label>
                                                <input type="text" name="price" parsley-trigger="change" required
                                                       placeholder="Enter Lesson Price" class="form-control" id="price" onkeypress="return onlyPrice(event, this)" ondrop="return false;" onpaste="return false;" oncontextmenu="return false;"
                   maxlength="10">
                                                       <i class="fa fa-exclamation-triangle error" id="price_error" aria-hidden="true"></i>
                                            </div>
                                            
                                            <div class="form-group">
                                                 
                                                 <div class="form-group">
                                                <label for="emailAddress">Lesson Details (give detailed description)<span class="text-danger">*</span></label><br>
                                                <textarea id="summernote" name="detail"></textarea>
                                                <i class="fa fa-exclamation-triangle error" id="detail_error" aria-hidden="true"></i>
                                            </div>

                                                  <div class="filebutton bg-primary" style="display:flex !important;">Upload Lesson Video<span class="fa fa-plus">
<span id="fil"><input type="file" id="file" name="fileToUpload"></span>
                                                </span></div>
                                                <i class="fa fa-exclamation-triangle error" id="video_error" aria-hidden="true"></i>
                                            </div>
                                            

                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" id="submit" name="add_lesson">
                                                    Add Lesson
                                                </button>
                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->
  

                    <script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
  </script>

  <script type="text/javascript">
          function validate(){

    var topic = document.getElementById("topic").value;
    var video = document.getElementById("file").value;
    var detail = document.getElementById("summernote").value;
    var detail = document.getElementById("price").value;



    if(topic.length == 0){
        document.getElementById("topic_error").style.display="block";
        document.getElementById("topic_error").innerHTML="Enter a Suitable Lesson Topic ";
        return false;
    }
    else{
        document.getElementById("topic_error").style.display="none";
    }
    
    if(detail.length == 0){
        document.getElementById("detail_error").style.display="block";
        document.getElementById("detail_error").innerHTML="Write Brief details of this Lesson to help Learners ";
        return false;
    }
    else{
        document.getElementById("detail_error").style.display="none";
    }

    if(price.length == 0){
        document.getElementById("price_error").style.display="block";
        document.getElementById("price_error").innerHTML="Please enter amount for lesson";
        return false;
    }
    else{
        document.getElementById("price_error").style.display="none";
    }

    if(video.length == 0){
        document.getElementById("video_error").style.display="block";
        document.getElementById("video_error").innerHTML="You must Upload a Course Video";
        return false;
    }
    else{
        document.getElementById("video_error").style.display="none";
    }
    
       return true;
    
}

function onlyPrice(evt, element) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57) && !(charCode == 46 || charCode == 8))
    return false;
  else {
    var len = $(element).val().length;
    var index = $(element).val().indexOf('.');
    if (index > 0 && charCode == 46) {
      return false;
    }
    if (index > 0) {
      var CharAfterdot = (len + 1) - index;
      if (CharAfterdot > 3) {
        return false;
      }
    }

  }
  return true;
}

var val = document.getElementById("val").value
if(val == 0){
    document.getElementById("submit").disabled = true;

}
else{
    document.getElementById("submit").disabled = false;
}
 

 </script>

<?php require_once 'inc/footer.php'; ?>