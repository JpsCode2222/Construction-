<?php
include('connection.php');
include('navbar.php');
?>

<form action="save_slider_image.php" method="post" enctype="multipart/form-data">
<div class="container-fluid bg-white p-3">
<h3>Manage Slider Images</h3>
    <div class="row">
        <div class="col-md-8 col-xl-10">
            <label for="">Select Image</label>
            <input type="file" name="slider_image" id="">
        </div>
        <div class="col-md-4 col-xl-2">
            <br>
            <button class="btn btn-sm btn-primary">Add Image</button>
        </div>
    </div>
</div>
</form>

<div class="container-fluid bg-white p-3">
    <div class="row">
        <?php
        $slider_data=mysqli_query($conn,"select * from slider_image");
        foreach($slider_data as $key => $row)
        {
            ?>
            <div class="col-md-3">
                <img width="100%" src="uploads/<?=$row['image']?>" alt="">
                <a href="edit_slider_image.php?id=<?=$row['slider_image_id']?>">
                <button class="btn btn-sm mt-1 btn-primary">Edit</button>
                </a>
                <a href="delete_slider_image.php?id=<?=$row['slider_image_id']?>">
                <button class="btn btn-sm mt-1 btn-danger float-end">Delete</button>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<br>
<?php
$data=mysqli_query($conn,"select * from slider_details");
$slider_details=mysqli_fetch_assoc($data);
?>
<form action="save_slider_details.php" method="post" enctype="multipart/form-data">
    <div class="container-fluid bg-white p-3">
    <h3>Manage Slider Heading</h3>
        <div class="row">
            <div class="col-md-4 mt-3">
                Title
                <input type="text" name="slider_title" value="<?=$slider_details['slider_title']?>" class="form-control">
            </div>
            <div class="col-md-4 mt-3">
                Description
                <textarea type="text" name="slider_description"  class="form-control"><?=$slider_details['slider_title']?></textarea>
            </div>
            <div class="col-md-4 mt-3">
                Button Text
                <input type="text" name="slider_button_text" value="<?=$slider_details['slider_button_text']?>" class="form-control">
            </div>
            <div class="col-md-4 mt-3">
                Button Link
                <input type="text" name="slider_button_link" value="<?=$slider_details['slider_button_link']?>" class="form-control">
            </div>
            <div class="col-md-4 mt-3">
                <br>
                <br>
                <button class="btn btn-primary btn-sm">Save Details</button>
            </div>
        </div>
    </div>
</form>
<?php
include('footer.php');
?>