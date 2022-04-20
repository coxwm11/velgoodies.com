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
    
     $result = mysqli_query ($conn, "SELECT * FROM `Asset Disposition Form` WHERE `SubmissionId` = \"$submissionId\" ");
    
    if((mysqli_num_rows($result) > 0)){
        
        
   
    
   if($acqDate1 == "Add"){
    $stmt = $conn->prepare ("INSERT into `Asset Disposition Form` (SubmissionId, email, toDivision, fromDivision, quantity, indicateType, tDate, description, assetTag, serialNum, manf, psid, acqDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
   
    
   $stmt->bind_param('ssssisssissis', $submissionId,$email, $toDivision, $fromDivision, $quantity, $indicateType, $tDate, $description1, $assetTag1, $serialNum1, $manf1, $psid1, $acqDate1);
   
    
 
     
   }
   
  elseif ($acqDate1 == "Remove"){ 
        $stmt = $conn->prepare ("UPDATE `Asset Disposition Form` SET `acqDate`= 'Remove' WHERE `SubmissionId` ='$submissionId' AND `assetTag`= '$assetTag1' ");
        
      
       
       
   }
   
   
   
     elseif ($acqDate1 == "Undo Remove"){ 
        $stmt = $conn->prepare ("UPDATE `Asset Disposition Form` SET `acqDate`= '' WHERE `SubmissionId` ='$submissionId' AND `assetTag`= '$assetTag1' ");
        
      
       
       
   }
   
      elseif ($checkDevice == "Checked"){ 
        $stmt = $conn->prepare ("UPDATE `Asset Disposition Form` SET `Completion`= 'Checked' WHERE `SubmissionId` ='$submissionId'");
        
      
       
       
   }
  
   
 
      $stmt-> execute();
      
    $stmt-> close();
    
    
     echo" <h3> <font color = green>Your submission has been received.</font></h3>";
  

    
echo "<button onClick= \"location.href = 'https://velgoodies.com/add_remove_wndw.html' \">Submit Another Form </button>";
   
    
   
    $conn->close(); 
    
    }
    
    else{
        echo "<h3 style=color:red>Ooops! This Submission ID is not in the database. Please check your submission.</h3> ";
        
        echo" <button onclick=history.go(-1) style = background-color: red color:white>Go Back to Correct Form </button>";
    }
    
}















?>













