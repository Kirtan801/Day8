<?php



$host ="localhost";
$username = "root";
$passwd = "";
$dbname = "db_create";
$connection= mysqli_connect($host, $username, $passwd, $dbname);
if($_POST){
   
    $name = $_POST['txt2'];
    $gender= $_POST['txt3'];
    $dob=$_POST['txt4'];
    $email=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $area=$_POST['txt8'];
    $pincode=$_POST['txt9'];
    $password=$_POST['txt10'];
    $q = mysqli_query($connection, "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_area,st_pincode,st_password) values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$area}','{$pincode}','{$password}')")or die("error".mysqli_error($connection));
    
    if($q){
        echo"<script>alert('Record added')</script>";
    }
}
    
    
?>
<html>
    <body>
        <form method ="post">
            
            Name:<input type ="text" name="txt2"/><br/>
            Gender:<select name="txt3">
                <option>Male</option>
                <option>Female</option>
            </select><br/>
            DOB:<input type="date" name="txt4"/><br/>
            e-mail:<input type="email" name="txt5"/><br/>
            Mobile Number:<input type="number" name="txt6"/><br/>
            Address:<input type="text" name="txt7"/><br/>
            Area:<input type="text" name="txt8"/><br/>
            Pin code:<input type="number" name="txt9"/><br/>
            Password:<input type="password" name="txt10"/><br/>

            
            <input type="submit"/>
            
        </form>
    </body>
</html>
<a href ='4-stutable.php'>Display record</a>;