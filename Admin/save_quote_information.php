<?php
extract($_POST);
include('connection.php');
// $q="create table quote_info(quote_info_id int primary key auto_increment,quote_title text, quote_desc text)";
// $q="insert into quote_info(quote_title,quote_desc) values ('$quote_title','$quote_desc')";
$q="update quote_info set quote_title='$quote_title',quote_desc='$quote_desc'";
mysqli_query($conn,$q);
?>
<script>
    alert("Information Saved");
    location.href="getquote.php";
</script>