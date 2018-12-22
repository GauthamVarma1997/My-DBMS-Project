<?php

$count = 0;
$option = $_POST['q1'];
if($option=='a')
	$count+=4;
else if($option=='b')
	$count+=3;
else if($option=='c')
	$count+=2;
else
	$count+=1;

$option = $_POST['q2'];
if($option=='a')
	$count+=4;
else if($option=='b')
	$count+=3;
else if($option=='c')
	$count+=2;
else
	$count+=1;

$option = $_POST['q3'];
if($option=='a')
	$count+=4;
else if($option=='b')
	$count+=3;
else if($option=='c')
	$count+=2;
else
	$count+=1;

$option = $_POST['q4'];
if($option=='a')
	$count+=4;
else if($option=='b')
	$count+=3;
else if($option=='c')
	$count+=2;
else
	$count+=1;

$option = $_POST['q5'];
if($option=='a')
	$count+=4;
else if($option=='b')
	$count+=3;
else if($option=='c')
	$count+=2;
else
	$count+=1;

 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dbmsproj";

    $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbname) or die(mysqli_error($connection));
$strSQL = mysqli_query($connection,"select fieldOfWork from combo2 where thresh_low<='".$count."' and thresh_high>='".$count."'");
         $Results = mysqli_fetch_array($strSQL);


echo '<script type="text/javascript">alert("Our website predicts your field of work to be '.$Results[0].'")</script>';
// echo ($Results[0]);
  
  


?>