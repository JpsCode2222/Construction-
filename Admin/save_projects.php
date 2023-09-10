<?php
include('connection.php');
extract($_POST);
$project_image=time().$_FILES['project_image']['name'];
move_uploaded_file($_FILES['project_image']['tmp_name'],'uploads/'.$project_image);
// $q="create table project(project_id int primary key auto_increment,project_type varchar(200),project_title varchar(200), project_details text,project_image text)";
$q="insert into project(project_type,project_title,project_details,project_image) values('$project_type','$project_title','$project_details','$project_image')";
mysqli_query($conn,$q);
?>
<script>
    alert("Project Added");
    location.href="projects.php";
</script>