<?php
include('admin/connection.php');
extract($_POST);
// $q="create table customer_quote_request (customer_quote_request_id int primary key auto_increment,name text,email varchar(200),phone text,message text) ";
$message=addslashes($message);
$q="insert into customer_quote_request(name,email,phone,message) values ('$name','$email','$phone','$message')";
mysqli_query($conn,$q);
?>
<script>
    alert("Thanx for your request...");
    location.href="index.php";
</script>