<?php
include('navbar.php');
?>
<form action="save_projects.php" method="post" enctype="multipart/form-data">
<label for="">Project Type : </label>    
<select name="project_type" >
    <option>Remodeling</option>
    <option>Construction</option>
    <option>Repairs</option>
    <option>Design</option>
</select>
<br><br>
<label for="">Project Title : </label>    
<input type="text" name="project_title">
<br><br>
<label for="">Project Image : </label>    
<input type="file" name="project_image">
<br><br>
<label for="">Project Details : </label>    
<input type="text" name="project_details">
<br><br>
<button>Save Project</button>
</form>
<?php
include('footer.php');
?>