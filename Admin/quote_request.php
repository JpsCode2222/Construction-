<?php
include('navbar.php');
?>
<?php
$data=mysqli_query($conn,"select * from customer_quote_request");
?>
<div class="container-fluid bg-white p-3">
    <div class="row">
        <div class="col-md-12">
            <h3>Customer Quote Requests</h3>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered tabel-sm">
                <tr>
                    <th>SN</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>MESSAGE</th>
                </tr>
                <?php
                foreach ($data as $key => $row) {
                    ?>
                    <tr>
                    <td><?=$key+1?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['message']?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>