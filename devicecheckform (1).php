


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


// Accessory Database Code Below

$adescription1 = $_POST['adescription1'];
$aqty1 = $_POST['aqty1'];
$apsid1 = $_POST['apsid1'];

$adescription2 = $_POST['adescription2'];
$aqty2 = $_POST['aqty2'];
$apsid2 = $_POST['apsid2'];

$adescription3 = $_POST['adescription3'];
$aqty3 = $_POST['aqty3'];
$apsid3 = $_POST['apsid3'];

$adescription4 = $_POST['adescription4'];
$aqty4 = $_POST['aqty4'];
$apsid4 = $_POST['apsid4'];

$adescription5 = $_POST['adescription5'];
$aqty5 = $_POST['aqty5'];
$apsid5 = $_POST['apsid5'];

 
// Device Database Code Below


$description1 = $_POST['description1'];
$assetTag1 = $_POST['assetTag1'];
$serialNum1 = $_POST['serialNum1'];
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
    
    
  $result = mysqli_query ($conn, "SELECT * FROM `Asset Disposition Form` WHERE `SubmissionId` = \"$submissionId\" ");
  
 if((mysqli_num_rows($result) > 0)){
   

   
      if ($checkDevice == "Checked"){ 
        $stmt = $conn->prepare ("UPDATE `Asset Disposition Form` SET `Completion`= 'Checked', `tDate`= '$tDate' WHERE `SubmissionId` ='$submissionId'");
        
      
       
       
   }
  
   
 
      $stmt-> execute();
    $stmt-> close();
   
   
     echo" <h3> <font color = green>Your submission has been received.</font></h3>";
  

    
echo "<button onClick= \"location.href = 'https://velgoodies.com/devicecheckoff.html' \">Submit Another Form </button>";

   
    $conn->close(); 
    
 }
 
 else{
     
      echo "<h3 style=color:red>Ooops! This Submission ID is not in the database. Please check your submission.</h3> ";
        
        echo" <button onclick=history.go(-1) style = background-color: red color:white>Go Back to Correct Form </button>";
 }
    
}















?>













