<?php
include('connection.php');
extract($_GET);
$q="delete from slider_image where slider_image_id='$id'";
mysqli_query($conn,$q);
?>
<script>
    alert("Image Deleted Successfully");
    location.href="slider.php";
</script>