<?php
include('connection.php');
extract($_FILES);
$filename=time().$_FILES['slider_image']['name'];
$q="insert into slider_image(image) values('$filename')";
mysqli_query($conn,$q);
move_uploaded_file($_FILES['slider_image']['tmp_name'],'uploads/'.$filename);
?>
<Script>
    alert("Image Added Successfull");
    window.location.href="slider.php";
</Script>