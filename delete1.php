<?php

$connection = mysqli_connect("localhost", "root", "", "db_create");
//Query
//$q=mysqli_query($connection,"select * from tbl_student") or die("error".mysqli_error($connection));
$password = $_GET['deleteid'];
$q=mysqli_query($connection, "delete from tbl_student where st_mobile='{$password}'")  or die("Error". mysqli_error($connection));
//$q=mysqli_query($connection, "update tbl_user set is_delete = 1 where user_id='{$id}'")  or die("error". mysqli_error($connection));

if($q){
    echo"<script>alert('record deleted');window.location='4-stutable.php';</script>";
}
