<?php
$connection = mysqli_connect("localhost", "root", "", "db_create");
//Query
$q=mysqli_query($connection,"select * from tbl_student") or die("error".mysqli_error($connection));
echo"<table>";
echo"<table border='1'>";
echo"<tr>";
//echo"<th>ID</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>DOB</th>";
echo"<th>e-mail</th>";
echo"<th>Mobile Number</th>";
echo"<th>Address</th>";
echo"<th>Area</th>";
echo"<th>Pincode</th>";
echo"<th>Password</th>";
echo"<th>Action</th>";

echo"</tr>";
while($row = mysqli_fetch_array($q)){
    echo"<tr>";
   // echo"<td>{$row['st_id']}</td>";
    echo"<td>{$row['st_name']}</td>";
    echo"<td>{$row['st_gender']}</td>"; 
    echo"<td>{$row['st_dob']}</td>"; 
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_mobile']}</td>"; 
    echo"<td>{$row['st_address']}</td>"; 
    echo"<td>{$row['st_area']}</td>"; 
    echo"<td>{$row['st_pincode']}</td>"; 
    echo"<td>{$row['st_password']}</td>"; 




    echo"<td><a href='edit1.php?id={$row['st_id']}'>Edit</a>|<a href='delete1.php?deleteid={$row['st_mobile']}'>DELETE</a></td>";
    echo"</tr>"; 
}
echo"</table>";

echo"<a href ='insert_record1.php'>Add record</a>";


