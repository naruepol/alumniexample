<?php 
session_start();
    if(isset($_POST['user'])){
        include("condb1.php");
        $username = $_POST['user'];
        $password = $_POST['pass'];

    	$sql="SELECT * FROM member_se
        WHERE  Username ='".$username."' 
        AND  Password ='".$password."' ";
        $result = mysqli_query($con,$sql);
				
        if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);

        $_SESSION["Member_id"] = $row["Member_id"];
        $_SESSION["Status"] = $row["Status"];

        if($_SESSION["Status"]=="Admin"){ 
        	Header("Location: index-admin.php");
        }
        if ($_SESSION["Status"]=="User"){ 
        	Header("Location: index-user.php");
        }
        }else{
            echo '<script>alert("Username หรือ Password ไม่ถูกต้อง")</script>';
            echo '<script>window.location="login.php"</script>';
        }
        }else{
       		Header("Location: index.php"); //user & password incorrect back to login again
    }
?>