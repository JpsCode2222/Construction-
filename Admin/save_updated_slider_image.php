<?php
include('connection.php');
if($_FILES['slider_image']['name']!="")
{
    extract($_POST);
    $filename=time().$_FILES['slider_image']['name'];
    move_uploaded_file($_FILES['slider_image']['tmp_name'],"uploads/".$filename);
    mysqli_query($conn,"update slider_image set image='$filename' where slider_image_id='$slider_image_id'");
}
?>
<script>
    alert("Image Updated Successfully");
    location.href="slider.php";
</script>