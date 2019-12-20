<?php
/* Getting file name */
$filename = $_FILES['file']['name'];
$uid = uniqid();
//$uploads_url = "http://" . $_SERVER['SERVER_NAME'] . "/". explode('/', $_SERVER['REQUEST_URI'])[0] . "/uploads/tmp_img/".$uid;

/* Location */
$location = "../../../uploads/tmp_img/".$uid."-".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
      
	echo $location;
   }else{
      echo 0;
   }
}
?>