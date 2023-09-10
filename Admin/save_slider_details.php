<?php

extract($_POST);
// $q="create table slider_details (slider_details_id int primary key auto_increment,slider_title varchar(200), slider_description text,slider_button_text varchar(100),slider_button_link text)";
include('connection.php');
// $q="insert into slider_details(slider_title,slider_description,slider_button_text,slider_button_link) values('$slider_title','$slider_description','$slider_button_text','$slider_button_link')";
$q="update slider_details set slider_title='$slider_title', slider_description='$slider_description', slider_button_text='$slider_button_text', slider_button_link='$slider_button_link'";
mysqli_query($conn,$q);
?>
<script>
    alert('Details Updated Successfully');
    location.href='slider.php';
</script>