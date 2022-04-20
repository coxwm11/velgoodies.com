<!DOCTYPE html>
<body>
    
  <!--  <h4> <font color = red>Thank you for submitting your Asset Disposition Form. Please print this file or save as a PDF for your records. A copy of this form has been sent to the email address you provided. Please include a copy of this form <u>inside and outside</u> of the box that you are sending with your devices. If additional support is needed, please email Virtual Education and Logisitics at device_support@scsk12.org. </font></h4>-->
    
<input type="button" onClick= "location.href ='https://velgoodies.com/accessoryadf.html';" value="Submit Another Form"/>
<button onClick="window.print()">Print this Page
</button>
</body>
</html>


<?php
/*
>From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/

$msg= $_POST['submit'];
  



if(isset($_POST['submit'])){

$email = strip_tags($_POST['email']);

    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */


	$from_add = "adf@scs.x10host.com"; 

	$to_add = "SCSAssetForm@gmail.com, $email";
       
	$subject = "Accessory Asset Disposition Form";


        
$message .= '<html><body>';


$message .= "<h2> SCS Accessory Asset Disposition Form </h2>";

$message .= '<table cellpadding="10" >';



$message .= "<tr>
<th bgcolor= yellow>
From: ".strip_tags($_POST['fromDivision'])."
</th>

<th bgcolor= yellow>
To: ".strip_tags($_POST['toDivision'])."
</th>



<th>
Date: ".strip_tags($_POST['tDate'])."
</th>

<th>
Submission ID: ".strip_tags($_POST['submissionId'])."

</th>

</tr>";

$message .= "</table>";






$message .= '<table rules="all" style="border-color: #777;" cellpadding="10">';


$message .= "<tr>


<th>
Type: ".strip_tags ($_POST['indicateType'])."
</th>

<th bgcolor= lightgray>
Date Received: _________________________________
 </th>

<th bgcolor= lightgray>
Processed: _______________________________ 
</th>


</tr>";

$message .="</table>";

$message .="<br>";


 $message .= "<table layout= fixed; width= 100%; border=1px;>";

 $message .= "<colgroup>
<col width= 372px>
<col width=372px>
<col width=372px>

</colgroup>";

  $message .= "<tr>
    <th>Asset Description</th>
    <th> Quantity </th>

    <th>PSID</th>
   
  </tr>";
  
  $message .= "</table>";


$message .= "<table layout=fixed; width= 100%;>";

$message .= "<colgroup>
<col width= 372px>
<col width=372px>
<col width=372px>

</colgroup>";


  
$message .= "<tr>
<td>" . strip_tags($_POST['description1']) . "</td> 
<td>" . strip_tags($_POST['qty1']) . "</td> 
<td>" . strip_tags($_POST['psid1']) . "</td> 
</tr>";


$message .= "<tr>
<td>" . strip_tags($_POST['description2']) . "</td> 
<td>" . strip_tags($_POST['qty2']) . "</td> 
<td>" . strip_tags($_POST['psid2']) . "</td> 
</tr>";


$message .= "<tr>
<td>" . strip_tags($_POST['description3']) . "</td> 
<td>" . strip_tags($_POST['qty3']) . "</td> 
<td>" . strip_tags($_POST['psid3']) . "</td> 
</tr>";

$message .= "<tr>
<td>" . strip_tags($_POST['description4']) . "</td> 
<td>" . strip_tags($_POST['qty4']) . "</td> 
<td>" . strip_tags($_POST['psid4']) . "</td> 
</tr>";


$message .= "<tr>
<td>" . strip_tags($_POST['description5']) . "</td> 
<td>" . strip_tags($_POST['qty5']) . "</td> 
<td>" . strip_tags($_POST['psid5']) . "</td> 
</tr>";



  $message .= "</table>";


 $message .= "<table layout= fixed; width= 100%; border=0px;>";
  
 



$message .= "<tr>

<td>

<h5> Shipper's Name:_______________________</h5>

</td>

<td>

<h5> Date:_______________________</h5>

</td>
<td>

<h5> Received by:_______________________</h5>

</td>

<td>
<h5> Date:_______________________</h5>

</td>

</tr>

<tr>

<td>

<h5> Delivered by:_______________________</h5>

</td>

<td>

<h5> Date:_______________________</h5>

</td>
<td>

<h5> Receiver's Name (print please):_______________________</h5>

</td>


</tr>";

$message .= "</table>";



$message .= "</body></html>";




	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
        $header .= "CC: ".$cc."\r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";

    $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}

}

echo "








<center>

<h2> SCS Asset Disposition Form </h2> 


</center>

<center>
<TABLE width=100%; border= 0px;  cellpadding = 10px;>

<tr>
<th bgcolor=yellow>
From: {$_POST['fromDivision']}
</th>

<th bgcolor=yellow>
To: {$_POST['toDivision']}
</th>



<th>
Date: {$_POST['tDate']}
</th>

<th>
Submission ID: {$_POST['submissionId']}

</th>

</tr>




</TABLE>

<br>




<table width=100%; border= 1px;  cellpadding = 10px;>


<tr>



<th>
Type: {$_POST['indicateType']}
</th>

<th bgcolor= lightgray>
Date Received: _________________________________
 </th>

<th bgcolor= lightgray>
Processed: _______________________________ 
</th>


</tr>


</table>


<br>




<center>

<table layout= fixed; width= 100%; border=1px;>

<colgroup>
<col width= 372px>
<col width=372px>
<col width=372px>

</colgroup>

  <tr>
    <th>Asset Description</th>
      <th>Quantity</th>
    <th>PSID</th>
    
  </tr>
  
  </table>
  
  
  
  </center>
  
 
  
  <table layout= fixed; width= 100%; border=0px;>
  
  <colgroup>
<col width= 372px>
<col width=372px>
<col width=372px>

</colgroup>

<tbody>
  <tr>
    <td text-align = center; >{$_POST['description1']} </td>
    <td>{$_POST['qty1']}</td>
    <td>{$_POST['psid1']}</td>
  </tr>
  
    <tr>
    <td text-align = center; >{$_POST['description2']} </td>
    <td>{$_POST['qty2']}</td>
    <td>{$_POST['psid2']}</td>
  </tr>

   <tr>
    <td text-align = center; >{$_POST['description3']} </td>
    <td>{$_POST['qty3']}</td>
    <td>{$_POST['psid3']}</td>
  </tr>
  
     <tr>
    <td text-align = center; >{$_POST['description4']} </td>
    <td>{$_POST['qty4']}</td>
    <td>{$_POST['psid4']}</td>
  </tr>
  
     <tr>
    <td text-align = center; >{$_POST['description5']} </td>
    <td>{$_POST['qty5']}</td>
    <td>{$_POST['psid5']}</td>
  </tr>


 
  </tbody>
 

</table>

<br>

  <table layout= fixed; width= 100%; border=0px;>
  
 



<tr>

<td>

<h5> Shipper's Name:_______________________</h5>

</td>

<td>

<h5> Date:_______________________</h5>

</td>
<td>

<h5> Received by:_______________________</h5>

</td>

<td>
<h5> Date:_______________________</h5>

</td>

</tr>

<tr>

<td>

<h5> Delivered by:_______________________</h5>

</td>

<td>

<h5> Date:_______________________</h5>

</td>
<td>

<h5> Receiver's Name (print please):_______________________</h5>

</td>


</tr>

</table>


";


// Database Code Below
 
$toDivision = $_POST['toDivision'];
$fromDivision = $_POST['fromDivision'];
$indicateType = $_POST['indicateType'];
$tDate = $_POST['tDate'];
$submissionId = $_POST['submissionId'];
$email = $_POST['email'];

$description1 = $_POST['description1'];
$qty1 = $_POST['qty1'];
$psid1 = $_POST['psid1'];

$description2 = $_POST['description2'];
$qty2 = $_POST['qty2'];
$psid2 = $_POST['psid2'];

$description3 = $_POST['description3'];
$qty3 = $_POST['qty3'];
$psid3 = $_POST['psid3'];

$description4 = $_POST['description4'];
$qty4 = $_POST['qty4'];
$psid4 = $_POST['psid4'];

$description5 = $_POST['description5'];
$qty5 = $_POST['qty5'];
$psid5 = $_POST['psid5'];

 

 



$descriptionz = array("$description1", "$description2", "$description3", "$description4","$description5");


$qtyz = array("$qty1", "$qty2", "$qty3", "$qty4","$qty5" );



$psidz = array("$psid1", "$psid2", "$psid3","$psid4","$psid5");




//Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_accessoryadf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name );

if($conn-> connect_error){
    die('Connection Failed : '.$conn -> connect_error);
}else{
    
    
    
 for ($x = 0; $x <=5; $x++){   
     
      if($qtyz[$x] > 0){
   
    $stmt = $conn->prepare ("INSERT into `Accessory_ ADF` (SubmissionID, email, toDivision, fromDivision, indicateType, date, description, quantity, psid) VALUES (?,?,?,?,?,?,?,?,?)");
    
   
    
   $stmt->bind_param('sssssssis', $submissionId, $email, $toDivision, $fromDivision, $indicateType, $tDate, $descriptionz[$x], $qtyz[$x], $psidz[$x]);
   
    
   $stmt-> execute();
    $stmt-> close();
     
   
   
 }
 }
    
   
    
   
    $conn->close(); 
    
}
    
   
   



















?>













