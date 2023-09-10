<?php
echo "<pre>";
extract($_POST);
// print_r($_FILES);
$file_name=time().$_FILES['service_image']['name'];
move_uploaded_file($_FILES['service_image']['tmp_name'],'uploads/'.$file_name);
include('connection.php');
// $q="create table services(services_id int primary key auto_increment,service_title text, service_desc text, service_image text)";
$q="insert into services(service_title,service_desc,service_image) values('$service_title','$service_desc','$file_name')";
mysqli_query($conn,$q);
?>
<script>
    alert("Sevices Added");
    location.href="services.php";
</script>