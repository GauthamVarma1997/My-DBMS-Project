<?php
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbmsproj";
    if(isset($_POST)){

$gametype = $_POST['gametype'];
$gamename = $_POST['gamename'];

if (!empty($gametype) && !empty($gamename) ) {
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
      //$SELECT1 = "SELECT gametype From gamerinfo1 Where gametype = ? Limit 1";
      // $SELECT2 = "SELECT gamename From questionstable1 Where gamename = ? Limit 1";


     $INSERT1 = "INSERT Into questionstable1(gametype,gamename) values(?, ?)";

     // $INSERT2 = "INSERT Into gamerinfo2(rollno, gamingname) values(?, ?)";

     // $INSERT3 = "INSERT Into gamerinfo3(rollno, platform) values(?, ?)";

     // $INSERT4 = "INSERT Into gamerinfo4(rollno, interests) values(?, ?)";
     
     //Prepare statement
       // $stmt1 = $conn->prepare($SELECT1);
       // $stmt1->bind_param("s", $gametype);
       // $stmt1->execute();
       // $stmt1->bind_result($gametype);
       // $stmt1->store_result();
       // $rnum1 = $stmt1->num_rows;
       
      
      $stmt1= $conn->prepare($INSERT1);
      $stmt1->bind_param("ss", $gametype, $gamename);
      $stmt1->execute();
      header("Location: ques1.html");
       echo "New record inserted sucessfully"."<br>";
      
     $stmt1->close();

     // 2nd prep
//      $stmt2 = $conn->prepare($SELECT2);
//      $stmt2->bind_param("s", $rollno);
//      $stmt2->execute();
//      $stmt2->bind_result($rollno);
//      $stmt2->store_result();
//      $rnum2 = $stmt2->num_rows;
//      if ($rnum2==0) {
//       $stmt2->close();
//       $stmt2= $conn->prepare($INSERT2);
//       $stmt2->bind_param("ss", $rollno, $gamingname);
//       $stmt2->execute();
//       // echo "New record inserted sucessfully"."<br>";
//      } else {
//       echo "Someone already register using this rollno"."<br>";
//      }
//      $stmt2->close();


//     //prep 3

//      $stmt3 = $conn->prepare($SELECT3);
//      $stmt3->bind_param("s", $rollno);
//      $stmt3->execute();
//      $stmt3->bind_result($rollno);
//      $stmt3->store_result();
//      $rnum3 = $stmt3->num_rows;
//      if ($rnum3==0) {
//       $stmt3->close();
//       $stmt3= $conn->prepare($INSERT3);
//       $stmt3->bind_param("ss", $rollno, $platform);
//       $stmt3->execute();
      
//      } else {
//       echo "Someone already register using this rollno"."<br>";
//      }
//      $stmt3->close();

//      //4th prep
//      $stmt4 = $conn->prepare($SELECT4);
//      $stmt4->bind_param("s", $rollno);
//      $stmt4->execute();
//      $stmt4->bind_result($rollno);
//      $stmt4->store_result();
//      $rnum4 = $stmt4->num_rows;
//      if ($rnum4==0) {
//       $stmt4->close();
//       $stmt4= $conn->prepare($INSERT4);
//       $stmt4->bind_param("ss", $rollno, $interests);
//       $stmt4->execute();
//       header("Location: login.php");     
//                     } 
//     else {
//       echo "Someone already register using this rollno"."<br>";
//      }
//      $stmt4->close();


      $conn->close();
//     }
} 

}
else {
 echo "All field are required";
 die();
// }
    
  }
}
?>