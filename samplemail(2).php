
<?php
/*
>From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/

$msg= $_POST['submit'];
echo "<b> <h3> <font color = red>Thank you for submitting your Asset Disposition Form. Please print this file or save as a PDF for your records.</font></h3></b>";  


$msg="";
if(isset($_POST['submit'])){



    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */


	$from_add = "lessonplan@bmslessonplan.x10host.com"; 

	$to_add = "";
       
	$subject = "SCS Lesson Plan";


        
$message .= '<html><body>';


$message .= "<h2> SCS Asset Disposition Form </h2>";

$message .= '<table rules="all" style="border-color: #777;" cellpadding="10">';



$message .= "<tr>
<th>
From: ".strip_tags($_POST['fromDivision'])."
</th>

<th>
To: ".strip_tags($_POST['toDivision'])."
</th>



<th>
Date: ".strip_tags($_POST['tDate'])."
</th>

<th>
Sumbission ID: ".strip_tags($_POST['formId'])."

</th>

</tr>";

$message .= "</table>";






$message .= '<table rules="all" style="border-color: #777;" cellpadding="10">';


$message .= "<tr>

<th>

Device Quantity : ".strip_tags ($_POST['quantity'])."

</th>

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
<col width= 200px>
<col width=242px>
<col width=220px>
<col width=156px>
<col width= 150px>
<col width=150px>
</colgroup>";

  $message .= "<tr>
    <th>Asset Description</th>
    <th>SCS Asset Tag Number</th>
    <th>Serial Number</th>
    <th>Manufacturer</th>
    <th>PSID</th>
    <th>Acquisition Date</th>
  </tr>";
  
  $message .= "</table>";


$message .= "<table layout= fixed; width= 100%; border=1px;>";

 $message .= "<colgroup>
<col width= 200px>
<col width=242px>
<col width=220px>
<col width=156px>
<col width= 150px>
<col width=150px>
</colgroup>";

  $message .= "<tbody>
  
  
  
  
  
  
  
  </tbody>";
  
  
  
  
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
<th>
From: {$_POST['fromDivision']}
</th>

<th>
To: {$_POST['toDivision']}
</th>



<th>
Date: {$_POST['tDate']}
</th>

<th>
Sumbission ID: {$_POST['formId']}

</th>

</tr>




</TABLE>

<br>




<table width=100%; border= 1px;  cellpadding = 10px;>


<tr>

<th>

Device Quantity : {$_POST['quantity']}

</th>

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
<col width= 200px>
<col width=242px>
<col width=220px>
<col width=156px>
<col width= 150px>
<col width=150px>
</colgroup>

  <tr>
    <th>Asset Description</th>
    <th>SCS Asset Tag Number</th>
    <th>Serial Number</th>
    <th>Manufacturer</th>
    <th>PSID</th>
    <th>Acquisition Date</th>
  </tr>
  
  </table>
  
  
  
  </center>
  
 
  
  <table layout= fixed; width= 100%; border=0px;>
  
  <colgroup>
<col width= 200px>
<col width=242px>
<col width=220px>
<col width=156px>
<col width= 150px>
<col width=150px>
</colgroup>

<tbody>
  <tr>
    <td text-align = center; >{$_POST['description1']} </td>
    <td>{$_POST['assetTag1']}</td>
    <td>{$_POST['serialNum1']}</td>
    <td>{$_POST['manf1']}</td>
    <td>{$_POST['psid1']}</td>
    <td>{$_POST['acqDate1']}</td>
  </tr>
  
   <tr>
    <td>{$_POST['description2']}</td>
    <td>{$_POST['assetTag2']}</td>
    <td>{$_POST['serialNum2']}</td>
    <td>{$_POST['manf2']}</td>
    <td>{$_POST['psid2']}</td>
    <td>{$_POST['acqDate2']}</td>
  </tr>
  
  <tr>
    <td>{$_POST['description3']}</td>
    <td>{$_POST['assetTag3']}</td>
    <td>{$_POST['serialNum3']}</td>
    <td>{$_POST['manf3']}</td>
    <td>{$_POST['psid3']}</td>
    <td>{$_POST['acqDate3']}</td>
  </tr>
  
    <tr>
    <td>{$_POST['description4']}</td>
    <td>{$_POST['assetTag4']}</td>
    <td>{$_POST['serialNum4']}</td>
    <td>{$_POST['manf4']}</td>
    <td>{$_POST['psid4']}</td>
    <td>{$_POST['acqDate4']}</td>
  </tr>
  
  
    <tr>
    <td>{$_POST['description5']}</td>
    <td>{$_POST['assetTag5']}</td>
    <td>{$_POST['serialNum5']}</td>
    <td>{$_POST['manf5']}</td>
    <td>{$_POST['psid5']}</td>
    <td>{$_POST['acqDate5']}</td>
  </tr>
  
    <tr>
    <td>{$_POST['description6']}</td>
    <td>{$_POST['assetTag6']}</td>
    <td>{$_POST['serialNum6']}</td>
    <td>{$_POST['manf6']}</td>
    <td>{$_POST['psid6']}</td>
    <td>{$_POST['acqDate6']}</td>
  </tr>
  
    <tr>
    <td>{$_POST['description7']}</td>
    <td>{$_POST['assetTag7']}</td>
    <td>{$_POST['serialNum7']}</td>
    <td>{$_POST['manf7']}</td>
    <td>{$_POST['psid7']}</td>
    <td>{$_POST['acqDate7']}</td>
  </tr>
  
  
  
  <tr> <td>{$_POST['description8']} </td> 
 <td>{$_POST['assetTag8']} </td> 
 <td>{$_POST['serialNum8']} </td> 
 <td>{$_POST['manf8']} </td> 
 <td>{$_POST['psid8']} </td> 
 <td>{$_POST['acqDate8']} </td> </tr>

<tr> <td>{$_POST['description9']} </td> 
 <td>{$_POST['assetTag9']} </td> 
 <td>{$_POST['serialNum9']} </td> 
 <td>{$_POST['manf9']} </td> 
 <td>{$_POST['psid9']} </td> 
 <td>{$_POST['acqDate9']} </td> </tr>

<tr> <td>{$_POST['description10']} </td> 
 <td>{$_POST['assetTag10']} </td> 
 <td>{$_POST['serialNum10']} </td> 
 <td>{$_POST['manf10']} </td> 
 <td>{$_POST['psid10']} </td> 
 <td>{$_POST['acqDate10']} </td> </tr>

<tr> <td>{$_POST['description11']} </td> 
 <td>{$_POST['assetTag11']} </td> 
 <td>{$_POST['serialNum11']} </td> 
 <td>{$_POST['manf11']} </td> 
 <td>{$_POST['psid11']} </td> 
 <td>{$_POST['acqDate11']} </td> </tr>

<tr> <td>{$_POST['description12']} </td> 
 <td>{$_POST['assetTag12']} </td> 
 <td>{$_POST['serialNum12']} </td> 
 <td>{$_POST['manf12']} </td> 
 <td>{$_POST['psid12']} </td> 
 <td>{$_POST['acqDate12']} </td> </tr>

<tr> <td>{$_POST['description13']} </td> 
 <td>{$_POST['assetTag13']} </td> 
 <td>{$_POST['serialNum13']} </td> 
 <td>{$_POST['manf13']} </td> 
 <td>{$_POST['psid13']} </td> 
 <td>{$_POST['acqDate13']} </td> </tr>

<tr> <td>{$_POST['description14']} </td> 
 <td>{$_POST['assetTag14']} </td> 
 <td>{$_POST['serialNum14']} </td> 
 <td>{$_POST['manf14']} </td> 
 <td>{$_POST['psid14']} </td> 
 <td>{$_POST['acqDate14']} </td> </tr>

<tr> <td>{$_POST['description15']} </td> 
 <td>{$_POST['assetTag15']} </td> 
 <td>{$_POST['serialNum15']} </td> 
 <td>{$_POST['manf15']} </td> 
 <td>{$_POST['psid15']} </td> 
 <td>{$_POST['acqDate15']} </td> </tr>

<tr> <td>{$_POST['description16']} </td> 
 <td>{$_POST['assetTag16']} </td> 
 <td>{$_POST['serialNum16']} </td> 
 <td>{$_POST['manf16']} </td> 
 <td>{$_POST['psid16']} </td> 
 <td>{$_POST['acqDate16']} </td> </tr>

<tr> <td>{$_POST['description17']} </td> 
 <td>{$_POST['assetTag17']} </td> 
 <td>{$_POST['serialNum17']} </td> 
 <td>{$_POST['manf17']} </td> 
 <td>{$_POST['psid17']} </td> 
 <td>{$_POST['acqDate17']} </td> </tr>

<tr> <td>{$_POST['description18']} </td> 
 <td>{$_POST['assetTag18']} </td> 
 <td>{$_POST['serialNum18']} </td> 
 <td>{$_POST['manf18']} </td> 
 <td>{$_POST['psid18']} </td> 
 <td>{$_POST['acqDate18']} </td> </tr>

<tr> <td>{$_POST['description19']} </td> 
 <td>{$_POST['assetTag19']} </td> 
 <td>{$_POST['serialNum19']} </td> 
 <td>{$_POST['manf19']} </td> 
 <td>{$_POST['psid19']} </td> 
 <td>{$_POST['acqDate19']} </td> </tr>

<tr> <td>{$_POST['description20']} </td> 
 <td>{$_POST['assetTag20']} </td> 
 <td>{$_POST['serialNum20']} </td> 
 <td>{$_POST['manf20']} </td> 
 <td>{$_POST['psid20']} </td> 
 <td>{$_POST['acqDate20']} </td> </tr>

<tr> <td>{$_POST['description21']} </td> 
 <td>{$_POST['assetTag21']} </td> 
 <td>{$_POST['serialNum21']} </td> 
 <td>{$_POST['manf21']} </td> 
 <td>{$_POST['psid21']} </td> 
 <td>{$_POST['acqDate21']} </td> </tr>

<tr> <td>{$_POST['description22']} </td> 
 <td>{$_POST['assetTag22']} </td> 
 <td>{$_POST['serialNum22']} </td> 
 <td>{$_POST['manf22']} </td> 
 <td>{$_POST['psid22']} </td> 
 <td>{$_POST['acqDate22']} </td> </tr>

<tr> <td>{$_POST['description23']} </td> 
 <td>{$_POST['assetTag23']} </td> 
 <td>{$_POST['serialNum23']} </td> 
 <td>{$_POST['manf23']} </td> 
 <td>{$_POST['psid23']} </td> 
 <td>{$_POST['acqDate23']} </td> </tr>

<tr> <td>{$_POST['description24']} </td> 
 <td>{$_POST['assetTag24']} </td> 
 <td>{$_POST['serialNum24']} </td> 
 <td>{$_POST['manf24']} </td> 
 <td>{$_POST['psid24']} </td> 
 <td>{$_POST['acqDate24']} </td> </tr>

<tr> <td>{$_POST['description25']} </td> 
 <td>{$_POST['assetTag25']} </td> 
 <td>{$_POST['serialNum25']} </td> 
 <td>{$_POST['manf25']} </td> 
 <td>{$_POST['psid25']} </td> 
 <td>{$_POST['acqDate25']} </td> </tr>

<tr> <td>{$_POST['description26']} </td> 
 <td>{$_POST['assetTag26']} </td> 
 <td>{$_POST['serialNum26']} </td> 
 <td>{$_POST['manf26']} </td> 
 <td>{$_POST['psid26']} </td> 
 <td>{$_POST['acqDate26']} </td> </tr>

<tr> <td>{$_POST['description27']} </td> 
 <td>{$_POST['assetTag27']} </td> 
 <td>{$_POST['serialNum27']} </td> 
 <td>{$_POST['manf27']} </td> 
 <td>{$_POST['psid27']} </td> 
 <td>{$_POST['acqDate27']} </td> </tr>

<tr> <td>{$_POST['description28']} </td> 
 <td>{$_POST['assetTag28']} </td> 
 <td>{$_POST['serialNum28']} </td> 
 <td>{$_POST['manf28']} </td> 
 <td>{$_POST['psid28']} </td> 
 <td>{$_POST['acqDate28']} </td> </tr>

<tr> <td>{$_POST['description29']} </td> 
 <td>{$_POST['assetTag29']} </td> 
 <td>{$_POST['serialNum29']} </td> 
 <td>{$_POST['manf29']} </td> 
 <td>{$_POST['psid29']} </td> 
 <td>{$_POST['acqDate29']} </td> </tr>

<tr> <td>{$_POST['description30']} </td> 
 <td>{$_POST['assetTag30']} </td> 
 <td>{$_POST['serialNum30']} </td> 
 <td>{$_POST['manf30']} </td> 
 <td>{$_POST['psid30']} </td> 
 <td>{$_POST['acqDate30']} </td> </tr>

<tr> <td>{$_POST['description31']} </td> 
 <td>{$_POST['assetTag31']} </td> 
 <td>{$_POST['serialNum31']} </td> 
 <td>{$_POST['manf31']} </td> 
 <td>{$_POST['psid31']} </td> 
 <td>{$_POST['acqDate31']} </td> </tr>

<tr> <td>{$_POST['description32']} </td> 
 <td>{$_POST['assetTag32']} </td> 
 <td>{$_POST['serialNum32']} </td> 
 <td>{$_POST['manf32']} </td> 
 <td>{$_POST['psid32']} </td> 
 <td>{$_POST['acqDate32']} </td> </tr>

<tr> <td>{$_POST['description33']} </td> 
 <td>{$_POST['assetTag33']} </td> 
 <td>{$_POST['serialNum33']} </td> 
 <td>{$_POST['manf33']} </td> 
 <td>{$_POST['psid33']} </td> 
 <td>{$_POST['acqDate33']} </td> </tr>

<tr> <td>{$_POST['description34']} </td> 
 <td>{$_POST['assetTag34']} </td> 
 <td>{$_POST['serialNum34']} </td> 
 <td>{$_POST['manf34']} </td> 
 <td>{$_POST['psid34']} </td> 
 <td>{$_POST['acqDate34']} </td> </tr>

<tr> <td>{$_POST['description35']} </td> 
 <td>{$_POST['assetTag35']} </td> 
 <td>{$_POST['serialNum35']} </td> 
 <td>{$_POST['manf35']} </td> 
 <td>{$_POST['psid35']} </td> 
 <td>{$_POST['acqDate35']} </td> </tr>

<tr> <td>{$_POST['description36']} </td> 
 <td>{$_POST['assetTag36']} </td> 
 <td>{$_POST['serialNum36']} </td> 
 <td>{$_POST['manf36']} </td> 
 <td>{$_POST['psid36']} </td> 
 <td>{$_POST['acqDate36']} </td> </tr>

<tr> <td>{$_POST['description37']} </td> 
 <td>{$_POST['assetTag37']} </td> 
 <td>{$_POST['serialNum37']} </td> 
 <td>{$_POST['manf37']} </td> 
 <td>{$_POST['psid37']} </td> 
 <td>{$_POST['acqDate37']} </td> </tr>

<tr> <td>{$_POST['description38']} </td> 
 <td>{$_POST['assetTag38']} </td> 
 <td>{$_POST['serialNum38']} </td> 
 <td>{$_POST['manf38']} </td> 
 <td>{$_POST['psid38']} </td> 
 <td>{$_POST['acqDate38']} </td> </tr>

<tr> <td>{$_POST['description39']} </td> 
 <td>{$_POST['assetTag39']} </td> 
 <td>{$_POST['serialNum39']} </td> 
 <td>{$_POST['manf39']} </td> 
 <td>{$_POST['psid39']} </td> 
 <td>{$_POST['acqDate39']} </td> </tr>

<tr> <td>{$_POST['description40']} </td> 
 <td>{$_POST['assetTag40']} </td> 
 <td>{$_POST['serialNum40']} </td> 
 <td>{$_POST['manf40']} </td> 
 <td>{$_POST['psid40']} </td> 
 <td>{$_POST['acqDate40']} </td> </tr>


<tr> <td>{$_POST['description41']} </td> 
 <td>{$_POST['assetTag41']} </td> 
 <td>{$_POST['serialNum41']} </td> 
 <td>{$_POST['manf41']} </td> 
 <td>{$_POST['psid41']} </td> 
 <td>{$_POST['acqDate41']} </td> </tr>

<tr> <td>{$_POST['description42']} </td> 
 <td>{$_POST['assetTag42']} </td> 
 <td>{$_POST['serialNum42']} </td> 
 <td>{$_POST['manf42']} </td> 
 <td>{$_POST['psid42']} </td> 
 <td>{$_POST['acqDate42']} </td> </tr>

<tr> <td>{$_POST['description43']} </td> 
 <td>{$_POST['assetTag43']} </td> 
 <td>{$_POST['serialNum43']} </td> 
 <td>{$_POST['manf43']} </td> 
 <td>{$_POST['psid43']} </td> 
 <td>{$_POST['acqDate43']} </td> </tr>

<tr> <td>{$_POST['description44']} </td> 
 <td>{$_POST['assetTag44']} </td> 
 <td>{$_POST['serialNum44']} </td> 
 <td>{$_POST['manf44']} </td> 
 <td>{$_POST['psid44']} </td> 
 <td>{$_POST['acqDate44']} </td> </tr>

<tr> <td>{$_POST['description45']} </td> 
 <td>{$_POST['assetTag45']} </td> 
 <td>{$_POST['serialNum45']} </td> 
 <td>{$_POST['manf45']} </td> 
 <td>{$_POST['psid45']} </td> 
 <td>{$_POST['acqDate45']} </td> </tr>

<tr> <td>{$_POST['description46']} </td> 
 <td>{$_POST['assetTag46']} </td> 
 <td>{$_POST['serialNum46']} </td> 
 <td>{$_POST['manf46']} </td> 
 <td>{$_POST['psid46']} </td> 
 <td>{$_POST['acqDate46']} </td> </tr>

<tr> <td>{$_POST['description47']} </td> 
 <td>{$_POST['assetTag47']} </td> 
 <td>{$_POST['serialNum47']} </td> 
 <td>{$_POST['manf47']} </td> 
 <td>{$_POST['psid47']} </td> 
 <td>{$_POST['acqDate47']} </td> </tr>

<tr> <td>{$_POST['description48']} </td> 
 <td>{$_POST['assetTag48']} </td> 
 <td>{$_POST['serialNum48']} </td> 
 <td>{$_POST['manf48']} </td> 
 <td>{$_POST['psid48']} </td> 
 <td>{$_POST['acqDate48']} </td> </tr>

<tr> <td>{$_POST['description49']} </td> 
 <td>{$_POST['assetTag49']} </td> 
 <td>{$_POST['serialNum49']} </td> 
 <td>{$_POST['manf49']} </td> 
 <td>{$_POST['psid49']} </td> 
 <td>{$_POST['acqDate49']} </td> </tr>

<tr> <td>{$_POST['description50']} </td> 
 <td>{$_POST['assetTag50']} </td> 
 <td>{$_POST['serialNum50']} </td> 
 <td>{$_POST['manf50']} </td> 
 <td>{$_POST['psid50']} </td> 
 <td>{$_POST['acqDate50']} </td> </tr>




 
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



$formId = $_POST['formId']; 
$toDivision = $_POST['toDivision'];
$fromDivision = $_POST['fromDivision'];
$quantity = $_POST['quantity'];
$indicateType = $_POST['indicateType'];
$tDate = $_POST['tDate'];
$description1 = $_POST['description1'];
$assetTag1 = $_POST['assetTag1'];
$serialNum1 = $_POST['serialNum1'];
$manf1 = $_POST['manf1'];
$psid1 = $_POST['psid1'];
$acqDate1 = $_POST['acqDate1'];


//Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_adf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name );

if($conn-> connect_error){
    die('Connection Failed : '.$conn -> connect_error);
}else{
    
    $stmt = $conn->prepare ("INSERT into `Asset Disposition Form` (formId, toDivision, fromDivision, quantity, indicateType, tDate, description1, assetTag1, serialNum1, manf1, psid1, acqDate1) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    
   $stmt->bind_param('sssisssissis', $formId, $toDivision, $fromDivision, $quantity, $indicateType, $tDate, $description1, $assetTag1, $serialNum1, $manf1, $psid1, $acqDate1);


    $stmt-> execute();
    echo "Form Submitted Successfully.";
    
    $stmt-> close();
    $conn->close();
    
}
    
   
   



















?>













