<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
</head>
<body>
	<form id='login'  action='' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label  >rollno*:</label>
<input type='text' name='rollno'   maxlength="50" />
<label >Password*:</label>
<input type='password' name='password'  maxlength="50" />
<input name="action" type="hidden" value="login"/>
<input type='submit' name='Submit' value='LOGIN' />
</fieldset>
</form>
</body>
</html>

    
<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbmsproj";

    $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbname) or die(mysqli_error($connection));

    //include('db.php');

    if(isset($_POST['action']))
{       
    if($_POST['action']=="login")
    {
        $rollno = mysqli_real_escape_string($connection,$_POST['rollno']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select rollno,password,gametype from gamerinfo1 where rollno='".$rollno."' and password='".$password."'");
        $Results = mysqli_fetch_array($strSQL);
        
        if(count($Results)>=1)
        {
             //$message = $Results['rollno']." Login Sucessfully!!";
            header("Location: gameselect.php");

        }
        else
        {
            $message = "Invalid email or password!!";
        }
        
        echo "<p>" . $message . "</p>";
    }
}

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