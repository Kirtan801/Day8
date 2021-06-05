<?php


        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "db_create";
       
        $connection = mysqli_connect($host,$username,$passwd,$dbname);
        if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:4-stutable.php");
}
        $editid = $_GET['id'];
        //select data from table
        $editq = mysqli_query($connection,"select * from tbl_student where st_id= '{$editid}'") or die("Error".mysqli_error($connection));
        $editdata = mysqli_fetch_array($editq);
        //print_r($editdata);
        if($_POST){
            $txt1 = $_POST['txt1'];
            $txt2 = $_POST['txt2'];
            $txt3 = $_POST['txt3'];
            $txt4 =$_POST['txt4'];
            $txt5 =$_POST['txt5'];
            $txt6 =$_POST['txt6'];
            $txt7 =$_POST['txt7'];
            $txt8 =$_POST['txt8'];
            $txt9 =$_POST['txt9'];
           
$uq = mysqli_query($connection,"update tbl_student set st_name='{$txt1}',st_gender='{$txt2}',st_dob='{$txt3}',st_email='{$txt4}',
 st_mobile='{$txt5}',st_address='{$txt6}',st_area='{$txt7}',st_pincode='{$txt8}',st_password='{$txt9}'where st_id ='{$editid}'") or
die("ERROR".mysqli_error($connection));
           
            if($uq){
                echo "<script>alert('Record updated');window.location='4-stutable.php';</script>";
            }
        }
?>
<html>
    <body>
        <form method="post">
            <!--Name:<input type="text" value = "<?php echo $editdata ['user_name'];?>" name="txt1"/><br>
            Gender: Male<input type="radio" <?php if($editdata['user_gender']=="Male"){echo "checked";}?> value="Male" name="txt2"/>
            Female<input type="radio" <?php if($editdata['user_gender']=="Female"){echo "checked";}?> value="Female" name="txt2"/><br>
            Mobile:<input type="number" value = "<?php echo $editdata ['user_mobile'];?>" name="txt3"/><br>-->
           Name:<input type ="text" value = "<?php echo $editdata ['st_name'];?>" name="txt1"/><br/>
            Gender: Gender: Male<input type="radio" <?php if($editdata['st_gender']=="Male"){echo "checked";}?> value="Male" name="txt2"/>
            Female<input type="radio" <?php if($editdata['st_gender']=="Female"){echo "checked";}?> value="Female" name="txt2"/><br>
            
            DOB:<input type="date" value = "<?php echo $editdata ['st_dob'];?>" name="txt3"/><br>
            e-mail:<input type="email" value = "<?php echo $editdata ['st_email'];?>" name="txt4"/><br/>
            Mobile Number:<input type="number" value = "<?php echo $editdata ['st_mobile'];?>"  name="txt5"/><br/>
            Address:<input type="text"   value = "<?php echo $editdata ['st_address'];?>" name="txt6"/><br/>
            Area:<input type="text" value = "<?php echo $editdata ['st_area'];?>" name="txt7"/><br/>
            Pin code:<input type="number" value = "<?php echo $editdata ['st_pincode'];?>" name="txt8"/><br/>
            Password:<input type="password"  value = "<?php echo $editdata ['st_password'];?>" name="txt9"/><br/>
            <input type="submit"/>
        </form>
    </body>
</html>



