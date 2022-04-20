<!DOCTYPE html>
<body>
    
  <h3> <font color = green>Your submission has been received.</font></h3>
    
<input type="button" onClick= "location.href ='https://velgoodies.com/ADF_Corrections.php';" value="Submit Another Form"/>

</body>
</html>


<?php




//Both Code this 
$toDivision = $_POST['toDivision'];
$fromDivision = $_POST['fromDivision'];
$indicateType = $_POST['indicateType'];
$tDate = $_POST['tDate'];
$submissionId = $_POST['submissionId'];
$email = $_POST['email'];
$quantity = $_POST['quantity'];
$checkDevice =  $_POST['checkDevice'];
$assetTag1 = $_POST['assetTag1'];
$serialNum1 = $_POST['serialNum1'];



 
// Device Database Code Below


$description1 = $_POST['description1'];

$manf1 = $_POST['manf1'];
$psid1 = $_POST['psid1'];
$acqDate1 = $_POST['acqDate1'];





   

//Device Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_adf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name );

if($conn-> connect_error){
    die('Connection Failed : '.$conn -> connect_error);
}else{
    
    

   
        $stmt = $conn->prepare ("DELETE FROM `Asset Disposition Form` WHERE `SubmissionId` ='$submissionId' AND `assetTag` = '$assetTag1' ");
        
      
       
   
 
      $stmt-> execute();
    $stmt-> close();
   
    
   
    $conn->close(); 
    
}















?>













