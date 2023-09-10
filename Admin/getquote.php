<?php
include('navbar.php');
$q="select * from quote_info";
$res=mysqli_query($conn,$q);
$quote_data=mysqli_fetch_assoc($res);
?>
<form action="save_quote_information.php" method="post">
<div class="container-fluid bg-white p-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3>Manage Get Quote-information</h3>
        </div>
        <div class="col-md-12 mb-3">
            Enter Title
            <input type="text" name="quote_title" value="<?=$quote_data['quote_title']?>" class="form-control">
        </div>
        <div class="col-md-12 mb-3">
            Quote Description
        <textarea name="quote_desc" class="form-control"><?=$quote_data['quote_desc']?></textarea>
        </div>
        <div class="col-md-12 mb-3 text-end">
            <button class="btn btn-primary">Save Information</button>
        </div>
    </div>
</div>
</form>
<?php
include('footer.php');
?>