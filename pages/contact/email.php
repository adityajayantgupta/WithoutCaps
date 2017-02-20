<?php 
    $Femail=$_GET['Email'];
    $Fmessage = $_GET['Name'] + ", " + $_GET['Message'];
    $Fsubject=$_GET['Subject'];
    echo $Femail;

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name gytis02.21@gmail.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


mail("zozombis@gmail.com",$Fsubject,$Fmessage,$headers);

    ?>
