<?php      
if(isset($_POST['username'])){    
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "erp";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $fname = $_POST['firstname'];  
	$lname = $_POST['lastname'];  
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];   
     
      
        //to prevent from mysqli injection  
        $fname = stripcslashes($fname);
		$lname = stripcslashes($lname);  
        $email = stripcslashes($email);  
        $username = stripcslashes($username);  
        $password1 = stripcslashes($password1);  

        $gender = stripcslashes($gender);  
        $age = stripcslashes($age);   

        $fname =  mysqli_real_escape_string($con,$fname);
		$lname =  mysqli_real_escape_string($con,$lname);  
        $email =  mysqli_real_escape_string($con, $email);  
        $username =  mysqli_real_escape_string($con, $username);  
        $password1 =  mysqli_real_escape_string($con, $password1);  
      
        $gender =  mysqli_real_escape_string($con, $gender);  
        $age =  mysqli_real_escape_string($con, $age);   
        
        if($password1==$password2){
          $check = true;
        

        if($gender=="" || $age==""){
            $sql = "INSERT into user (fname, lname, email, username, password) values('$fname', '$lname', '$email', '$username', '$password1')";
            if($con->query($sql) == true){
                header("Location:account.php");  
              echo "successfull";
             }
              else{ 
            header("Location:register.php");
			echo "inner unscuccessful";
                }
        } 
        else{
            $sql = "INSERT into user (fname, lname, email, username, password, gender, age) values('$fname', '$lname', '$email', '$username', '$password1', '$gender', '$age')";

        if($con->query($sql) == true){
           header("Location:account.php"); 
           echo "successfull";
             }
        else{ 
			header("Location:register.php");
            }     
        }
       
    }
    else
        header("Location:register.php");

$con->close();
}   
?>