




    
<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbmsproj";

    //$connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbname) or die(mysqli_error($connection));

    //include('db.php');
// if(isset($_POST["submit"])){  
  
if(!empty($_POST['rollno']) && !empty($_POST['password'])) {  
    $rollno=$_POST['rollno'];  
    $password=$_POST['password'];  
  
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname) or die(mysqli_error($conn));

     
  
    $query=mysqli_query($conn,"SELECT * FROM gamerinfo1 WHERE rollno='".$rollno."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['rollno'];  
    $dbpassword=$row['password'];  
    }  
  
    if($rollno == $dbusername && $password == $dbpassword)  
    {  
    // session_start();  
    // $_SESSION['sess_user']=$rollno;  
  
    /* Redirect browser */  
    header("Location: gameselect.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
// }  

?>

<!-- <?php 
// function Login()
//  {
//     if(empty($_POST['rollno']))
//     {
//         $this->HandleError("rollno is empty!");
//         return false;
//     }
//     if(empty($_POST['password']))
//  {
//         $this->HandleError("Password is empty!");
//  return false;
//  }
//  $rollno = trim($_POST['rollno']);
//  $password = trim($_POST['password']);
//  if(!$this->CheckLoginInDB($rollno,$password))
//  {
//         return false;
//     }
//  session_start();
//  $_SESSION[$this->GetLoginSessionVar()] = $rollno;
//  return true;
//  }

//  function CheckLoginInDB($rollno,$password)
// {
//     if(!$this->DBLogin())
//     {
//         $this->HandleError("Database login failed!");
//         return false;
//     }          
//     $rollno = $this->SanitizeForSQL($rollno);
//     $password = ($password);
//     $qry = "Select rollno, password from $this->gamerinfo1 ".
//         " where rollno='$rollno' and password='$password' ";
    
//     $result = mysql_query($qry,$this->connection);
    
//     if(!$result || mysql_num_rows($result) <= 0)
//     {
//         $this->HandleError("Error logging in. ".
//             "The username or password does not match");
//         return false;
//     }
//     else echo "hi";	
// }
?>