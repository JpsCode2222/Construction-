<?php
include('navbar.php');
?>
<?php
extract($_GET);
$q="select * from slider_image where slider_image_id='$id'";
$data=mysqli_query($conn,$q);

$slider_data=mysqli_fetch_assoc($data);
?>
<form action="save_updated_slider_image.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="slider_image_id" value="<?=$slider_data['slider_image_id']?>">
<div class="container-fluid bg-white p-3">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit Slider Image</h3>
        </div>
        <div class="row">
        <div class="col-md-8 col-xl-10">
            <label for="">Select New Image</label>
            <input type="file" name="slider_image" id="">
            <br>
            <img class="mt-2" width="50%" src="uploads/<?=$slider_data['image']?>" alt="">
        </div>
        <div class="col-md-4 col-xl-2">
            <br>
            <button class="btn btn-sm btn-primary">Update Image</button>
        </div>
    </div>
    </div>
</div>
</form>
<?php
include('footer.php');
?>