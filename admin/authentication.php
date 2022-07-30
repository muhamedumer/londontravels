<!-- Admin login authentication(backend) -->
<?php    

    include('../dbconn.php');  
    
    $username = $_POST['user'];  
   $user=$username;  
           
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from tbluser where userid = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    
        
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
           
            $_SESSION['userid']=$user;  
            header("Location:adminhome.php");
exit();
            
        }
        else{  
            header("Location:../adminlogin.php?error=1");
            return;
        }     
?> 