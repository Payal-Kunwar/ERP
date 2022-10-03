<?php
if( isset($_SESSION["error"])){
  echo('<center><p style="color:red; size:14px;">'.$_SESSION["error"]."</p></center><br>");
  unset($_SESSION["error"]);
}
if( isset($_SESSION["success"])){
  echo('<center><p style="color:green; size:14px;">'.$_SESSION["success"]."</p></center><br>");
  unset($_SESSION["success"]);
}
?>
<hr>
<?php 
      require_once "pdo.php";
        if(isset($_POST['username']) && isset($_POST['password'])){

          $sql = "SELECT fname FROM user where username= :us and password= :pw";
          //preventing SQL injection
          $stmt = $pdo->prepare($sql);
          $stmt->execute(array(
            ':us' => $_POST['username'],
            ':pw' => $_POST['password'],
          ));
          //fetch the value

          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          //var_dump($row);
          //$row is false if no such name exists
          if($row === FALSE ){
             $_SESSION["error"] = "Invalid credentials! Please try again";
             //echo "<script>document.getElementById('box').innerHTML+='<center>Invalid credentials! Please try again</center>'</script>";
             header('Location: login.php');
             return;
          }
          else{
             $_SESSION["username"] = $_POST["username"];
             $_SESSION["success"] = "Logged in successfully.";
             header("Location: index.php");
             return;
          }
        }
     ?> 