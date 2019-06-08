<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
 $file_size = $_FILES['image']['size'];
 $file_type = $_FILES['image']['type'];
 $folder="gallery/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 
 $image=$_POST["image"];
 $caption=$_POST["caption"];
 
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO gallery_uploads(image,caption) VALUES('$final_file','$caption')";
  mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='galleryUpload.php';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='galleryUpload.php';
        </script>
  <?php
 }
}
?>