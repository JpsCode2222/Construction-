<?php
include('navbar.php')
?>
<form action="save_service.php" method="POST" enctype="multipart/form-data">
<div class="container-fluid bg-white p-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <h3>Manage Services</h3>
        </div>
        <div class="col-md-6 mb-3">
            Enter Services Title
            <input type="text" name="service_title" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            Enter Services Image
            <input type="file" name="service_image" class="form-control">
        </div>
        <div class="col-md-12 mb-3">
            Enter Services Description
            <textarea type="text" name="service_desc" class="form-control"></textarea>
        </div>
        <div class="col-md-12 mb-3 text-end">
            <button class="btn btn-sm btn-primary ">Save</button>
        </div>
    </div>
</div>
</form>
<?php
include('footer.php')
?>