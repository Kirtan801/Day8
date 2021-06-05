<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship");
//Query
$q=mysqli_query($connection,"select * from tbl_user") or die("error".mysqli_error($connection));
$id = $_GET['deleteid'];
//$q=mysqli_query($connection, "delete from tbl_user where user_id='{$id}'")  or die("error". mysqli_error($connection));
$q=mysqli_query($connection, "update tbl_user set is_delete = 1 where user_id='{$id}'")  or die("error". mysqli_error($connection));

if($q){
    echo"<script>alert('record deleted');window.location='3-table.php';</script>";
}


