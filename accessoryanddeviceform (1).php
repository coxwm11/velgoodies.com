<!DOCTYPE html>
<body>
    
  <!--  <h4> <font color = red>Thank you for submitting your Asset Disposition Form. Please print this file or save as a PDF for your records. A copy of this form has been sent to the email address you provided. Please include a copy of this form <u>inside and outside</u> of the box that you are sending with your devices. If additional support is needed, please email Virtual Education and Logisitics at device_support@scsk12.org. </font></h4>-->
    
<input type="button" onClick= "location.href ='https://velgoodies.com/adfv2.html';" value="Submit Another Form"/>
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
       
	$subject = "Accessory and Device Asset Disposition Form";


        
$message .= '<html><body>';


$message .= "<h2> SCS Accessory and Device Asset Disposition Form </h2>";

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
    <th>Accessory Asset Description</th>
    <th> Accessory Quantity </th>

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
<td>" . strip_tags($_POST['adescription1']) . "</td> 
<td>" . strip_tags($_POST['aqty1']) . "</td> 
<td>" . strip_tags($_POST['apsid1']) . "</td> 
</tr>";


$message .= "<tr>
<td>" . strip_tags($_POST['adescription2']) . "</td> 
<td>" . strip_tags($_POST['aqty2']) . "</td> 
<td>" . strip_tags($_POST['apsid2']) . "</td> 
</tr>";


$message .= "<tr>
<td>" . strip_tags($_POST['adescription3']) . "</td> 
<td>" . strip_tags($_POST['aqty3']) . "</td> 
<td>" . strip_tags($_POST['apsid3']) . "</td> 
</tr>";

$message .= "<tr>
<td>" . strip_tags($_POST['adescription4']) . "</td> 
<td>" . strip_tags($_POST['aqty4']) . "</td> 
<td>" . strip_tags($_POST['apsid4']) . "</td> 
</tr>";


$message .= "<tr>
<td>" . strip_tags($_POST['adescription5']) . "</td> 
<td>" . strip_tags($_POST['aqty5']) . "</td> 
<td>" . strip_tags($_POST['apsid5']) . "</td> 
</tr>";



  $message .= "</table>";
  
  $message .= '<table rules="all" style="border-color: #777;" cellpadding="10">';


$message .= "<tr>

<th>

Device Quantity : ".strip_tags ($_POST['quantity'])."

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


$message .= "<table layout=fixed; width= 100%;>";

$message .= "<colgroup>
<col width= 200px>
<col width=242px>
<col width=220px>
<col width=156px>
<col width= 150px>
<col width=150px>
</colgroup>";


  
$message .= "<tr>
<td>" . strip_tags($_POST['description1']) . "</td> 
<td>" . strip_tags($_POST['assetTag1']) . "</td> 
<td>" . strip_tags($_POST['serialNum1']) . "</td> 
<td>" . strip_tags($_POST['manf1']) . "</td> 
<td>" . strip_tags($_POST['psid1']) . "</td> 
<td>" . strip_tags($_POST['acqDate1']) . "</td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description2'])." </td> 
<td>".strip_tags($_POST['assetTag2'])." </td> 
<td>".strip_tags($_POST['serialNum2'])." </td> 
<td>".strip_tags($_POST['manf2'])." </td> 
<td>".strip_tags($_POST['psid2'])." </td> 
<td>".strip_tags($_POST['acqDate2'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description3'])." </td> 
<td>".strip_tags($_POST['assetTag3'])." </td> 
<td>".strip_tags($_POST['serialNum3'])." </td> 
<td>".strip_tags($_POST['manf3'])." </td> 
<td>".strip_tags($_POST['psid3'])." </td> 
<td>".strip_tags($_POST['acqDate3'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description4'])." </td> 
<td>".strip_tags($_POST['assetTag4'])." </td> 
<td>".strip_tags($_POST['serialNum4'])." </td> 
<td>".strip_tags($_POST['manf4'])." </td> 
<td>".strip_tags($_POST['psid4'])." </td> 
<td>".strip_tags($_POST['acqDate4'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description5'])." </td> 
<td>".strip_tags($_POST['assetTag5'])." </td> 
<td>".strip_tags($_POST['serialNum5'])." </td> 
<td>".strip_tags($_POST['manf5'])." </td> 
<td>".strip_tags($_POST['psid5'])." </td> 
<td>".strip_tags($_POST['acqDate5'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description6'])." </td> 
<td>".strip_tags($_POST['assetTag6'])." </td> 
<td>".strip_tags($_POST['serialNum6'])." </td> 
<td>".strip_tags($_POST['manf6'])." </td> 
<td>".strip_tags($_POST['psid6'])." </td> 
<td>".strip_tags($_POST['acqDate6'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description7'])." </td> 
<td>".strip_tags($_POST['assetTag7'])." </td> 
<td>".strip_tags($_POST['serialNum7'])." </td> 
<td>".strip_tags($_POST['manf7'])." </td> 
<td>".strip_tags($_POST['psid7'])." </td> 
<td>".strip_tags($_POST['acqDate7'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description8'])." </td> 
<td>".strip_tags($_POST['assetTag8'])." </td> 
<td>".strip_tags($_POST['serialNum8'])." </td> 
<td>".strip_tags($_POST['manf8'])." </td> 
<td>".strip_tags($_POST['psid8'])." </td> 
<td>".strip_tags($_POST['acqDate8'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description9'])." </td> 
<td>".strip_tags($_POST['assetTag9'])." </td> 
<td>".strip_tags($_POST['serialNum9'])." </td> 
<td>".strip_tags($_POST['manf9'])." </td> 
<td>".strip_tags($_POST['psid9'])." </td> 
<td>".strip_tags($_POST['acqDate9'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description10'])." </td> 
<td>".strip_tags($_POST['assetTag10'])." </td> 
<td>".strip_tags($_POST['serialNum10'])." </td> 
<td>".strip_tags($_POST['manf10'])." </td> 
<td>".strip_tags($_POST['psid10'])." </td> 
<td>".strip_tags($_POST['acqDate10'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description11'])." </td> 
<td>".strip_tags($_POST['assetTag11'])." </td> 
<td>".strip_tags($_POST['serialNum11'])." </td> 
<td>".strip_tags($_POST['manf11'])." </td> 
<td>".strip_tags($_POST['psid11'])." </td> 
<td>".strip_tags($_POST['acqDate11'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description12'])." </td> 
<td>".strip_tags($_POST['assetTag12'])." </td> 
<td>".strip_tags($_POST['serialNum12'])." </td> 
<td>".strip_tags($_POST['manf12'])." </td> 
<td>".strip_tags($_POST['psid12'])." </td> 
<td>".strip_tags($_POST['acqDate12'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description13'])." </td> 
<td>".strip_tags($_POST['assetTag13'])." </td> 
<td>".strip_tags($_POST['serialNum13'])." </td> 
<td>".strip_tags($_POST['manf13'])." </td> 
<td>".strip_tags($_POST['psid13'])." </td> 
<td>".strip_tags($_POST['acqDate13'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description14'])." </td> 
<td>".strip_tags($_POST['assetTag14'])." </td> 
<td>".strip_tags($_POST['serialNum14'])." </td> 
<td>".strip_tags($_POST['manf14'])." </td> 
<td>".strip_tags($_POST['psid14'])." </td> 
<td>".strip_tags($_POST['acqDate14'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description15'])." </td> 
<td>".strip_tags($_POST['assetTag15'])." </td> 
<td>".strip_tags($_POST['serialNum15'])." </td> 
<td>".strip_tags($_POST['manf15'])." </td> 
<td>".strip_tags($_POST['psid15'])." </td> 
<td>".strip_tags($_POST['acqDate15'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description16'])." </td> 
<td>".strip_tags($_POST['assetTag16'])." </td> 
<td>".strip_tags($_POST['serialNum16'])." </td> 
<td>".strip_tags($_POST['manf16'])." </td> 
<td>".strip_tags($_POST['psid16'])." </td> 
<td>".strip_tags($_POST['acqDate16'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description17'])." </td> 
<td>".strip_tags($_POST['assetTag17'])." </td> 
<td>".strip_tags($_POST['serialNum17'])." </td> 
<td>".strip_tags($_POST['manf17'])." </td> 
<td>".strip_tags($_POST['psid17'])." </td> 
<td>".strip_tags($_POST['acqDate17'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description18'])." </td> 
<td>".strip_tags($_POST['assetTag18'])." </td> 
<td>".strip_tags($_POST['serialNum18'])." </td> 
<td>".strip_tags($_POST['manf18'])." </td> 
<td>".strip_tags($_POST['psid18'])." </td> 
<td>".strip_tags($_POST['acqDate18'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description19'])." </td> 
<td>".strip_tags($_POST['assetTag19'])." </td> 
<td>".strip_tags($_POST['serialNum19'])." </td> 
<td>".strip_tags($_POST['manf19'])." </td> 
<td>".strip_tags($_POST['psid19'])." </td> 
<td>".strip_tags($_POST['acqDate19'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description20'])." </td> 
<td>".strip_tags($_POST['assetTag20'])." </td> 
<td>".strip_tags($_POST['serialNum20'])." </td> 
<td>".strip_tags($_POST['manf20'])." </td> 
<td>".strip_tags($_POST['psid20'])." </td> 
<td>".strip_tags($_POST['acqDate20'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description21'])." </td> 
<td>".strip_tags($_POST['assetTag21'])." </td> 
<td>".strip_tags($_POST['serialNum21'])." </td> 
<td>".strip_tags($_POST['manf21'])." </td> 
<td>".strip_tags($_POST['psid21'])." </td> 
<td>".strip_tags($_POST['acqDate21'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description22'])." </td> 
<td>".strip_tags($_POST['assetTag22'])." </td> 
<td>".strip_tags($_POST['serialNum22'])." </td> 
<td>".strip_tags($_POST['manf22'])." </td> 
<td>".strip_tags($_POST['psid22'])." </td> 
<td>".strip_tags($_POST['acqDate22'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description23'])." </td> 
<td>".strip_tags($_POST['assetTag23'])." </td> 
<td>".strip_tags($_POST['serialNum23'])." </td> 
<td>".strip_tags($_POST['manf23'])." </td> 
<td>".strip_tags($_POST['psid23'])." </td> 
<td>".strip_tags($_POST['acqDate23'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description24'])." </td> 
<td>".strip_tags($_POST['assetTag24'])." </td> 
<td>".strip_tags($_POST['serialNum24'])." </td> 
<td>".strip_tags($_POST['manf24'])." </td> 
<td>".strip_tags($_POST['psid24'])." </td> 
<td>".strip_tags($_POST['acqDate24'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description25'])." </td> 
<td>".strip_tags($_POST['assetTag25'])." </td> 
<td>".strip_tags($_POST['serialNum25'])." </td> 
<td>".strip_tags($_POST['manf25'])." </td> 
<td>".strip_tags($_POST['psid25'])." </td> 
<td>".strip_tags($_POST['acqDate25'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description26'])." </td> 
<td>".strip_tags($_POST['assetTag26'])." </td> 
<td>".strip_tags($_POST['serialNum26'])." </td> 
<td>".strip_tags($_POST['manf26'])." </td> 
<td>".strip_tags($_POST['psid26'])." </td> 
<td>".strip_tags($_POST['acqDate26'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description27'])." </td> 
<td>".strip_tags($_POST['assetTag27'])." </td> 
<td>".strip_tags($_POST['serialNum27'])." </td> 
<td>".strip_tags($_POST['manf27'])." </td> 
<td>".strip_tags($_POST['psid27'])." </td> 
<td>".strip_tags($_POST['acqDate27'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description28'])." </td> 
<td>".strip_tags($_POST['assetTag28'])." </td> 
<td>".strip_tags($_POST['serialNum28'])." </td> 
<td>".strip_tags($_POST['manf28'])." </td> 
<td>".strip_tags($_POST['psid28'])." </td> 
<td>".strip_tags($_POST['acqDate28'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description29'])." </td> 
<td>".strip_tags($_POST['assetTag29'])." </td> 
<td>".strip_tags($_POST['serialNum29'])." </td> 
<td>".strip_tags($_POST['manf29'])." </td> 
<td>".strip_tags($_POST['psid29'])." </td> 
<td>".strip_tags($_POST['acqDate29'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description30'])." </td> 
<td>".strip_tags($_POST['assetTag30'])." </td> 
<td>".strip_tags($_POST['serialNum30'])." </td> 
<td>".strip_tags($_POST['manf30'])." </td> 
<td>".strip_tags($_POST['psid30'])." </td> 
<td>".strip_tags($_POST['acqDate30'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description31'])." </td> 
<td>".strip_tags($_POST['assetTag31'])." </td> 
<td>".strip_tags($_POST['serialNum31'])." </td> 
<td>".strip_tags($_POST['manf31'])." </td> 
<td>".strip_tags($_POST['psid31'])." </td> 
<td>".strip_tags($_POST['acqDate31'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description32'])." </td> 
<td>".strip_tags($_POST['assetTag32'])." </td> 
<td>".strip_tags($_POST['serialNum32'])." </td> 
<td>".strip_tags($_POST['manf32'])." </td> 
<td>".strip_tags($_POST['psid32'])." </td> 
<td>".strip_tags($_POST['acqDate32'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description33'])." </td> 
<td>".strip_tags($_POST['assetTag33'])." </td> 
<td>".strip_tags($_POST['serialNum33'])." </td> 
<td>".strip_tags($_POST['manf33'])." </td> 
<td>".strip_tags($_POST['psid33'])." </td> 
<td>".strip_tags($_POST['acqDate33'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description34'])." </td> 
<td>".strip_tags($_POST['assetTag34'])." </td> 
<td>".strip_tags($_POST['serialNum34'])." </td> 
<td>".strip_tags($_POST['manf34'])." </td> 
<td>".strip_tags($_POST['psid34'])." </td> 
<td>".strip_tags($_POST['acqDate34'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description35'])." </td> 
<td>".strip_tags($_POST['assetTag35'])." </td> 
<td>".strip_tags($_POST['serialNum35'])." </td> 
<td>".strip_tags($_POST['manf35'])." </td> 
<td>".strip_tags($_POST['psid35'])." </td> 
<td>".strip_tags($_POST['acqDate35'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description36'])." </td> 
<td>".strip_tags($_POST['assetTag36'])." </td> 
<td>".strip_tags($_POST['serialNum36'])." </td> 
<td>".strip_tags($_POST['manf36'])." </td> 
<td>".strip_tags($_POST['psid36'])." </td> 
<td>".strip_tags($_POST['acqDate36'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description37'])." </td> 
<td>".strip_tags($_POST['assetTag37'])." </td> 
<td>".strip_tags($_POST['serialNum37'])." </td> 
<td>".strip_tags($_POST['manf37'])." </td> 
<td>".strip_tags($_POST['psid37'])." </td> 
<td>".strip_tags($_POST['acqDate37'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description38'])." </td> 
<td>".strip_tags($_POST['assetTag38'])." </td> 
<td>".strip_tags($_POST['serialNum38'])." </td> 
<td>".strip_tags($_POST['manf38'])." </td> 
<td>".strip_tags($_POST['psid38'])." </td> 
<td>".strip_tags($_POST['acqDate38'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description39'])." </td> 
<td>".strip_tags($_POST['assetTag39'])." </td> 
<td>".strip_tags($_POST['serialNum39'])." </td> 
<td>".strip_tags($_POST['manf39'])." </td> 
<td>".strip_tags($_POST['psid39'])." </td> 
<td>".strip_tags($_POST['acqDate39'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description40'])." </td> 
<td>".strip_tags($_POST['assetTag40'])." </td> 
<td>".strip_tags($_POST['serialNum40'])." </td> 
<td>".strip_tags($_POST['manf40'])." </td> 
<td>".strip_tags($_POST['psid40'])." </td> 
<td>".strip_tags($_POST['acqDate40'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description41'])." </td> 
<td>".strip_tags($_POST['assetTag41'])." </td> 
<td>".strip_tags($_POST['serialNum41'])." </td> 
<td>".strip_tags($_POST['manf41'])." </td> 
<td>".strip_tags($_POST['psid41'])." </td> 
<td>".strip_tags($_POST['acqDate41'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description42'])." </td> 
<td>".strip_tags($_POST['assetTag42'])." </td> 
<td>".strip_tags($_POST['serialNum42'])." </td> 
<td>".strip_tags($_POST['manf42'])." </td> 
<td>".strip_tags($_POST['psid42'])." </td> 
<td>".strip_tags($_POST['acqDate42'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description43'])." </td> 
<td>".strip_tags($_POST['assetTag43'])." </td> 
<td>".strip_tags($_POST['serialNum43'])." </td> 
<td>".strip_tags($_POST['manf43'])." </td> 
<td>".strip_tags($_POST['psid43'])." </td> 
<td>".strip_tags($_POST['acqDate43'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description44'])." </td> 
<td>".strip_tags($_POST['assetTag44'])." </td> 
<td>".strip_tags($_POST['serialNum44'])." </td> 
<td>".strip_tags($_POST['manf44'])." </td> 
<td>".strip_tags($_POST['psid44'])." </td> 
<td>".strip_tags($_POST['acqDate44'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description45'])." </td> 
<td>".strip_tags($_POST['assetTag45'])." </td> 
<td>".strip_tags($_POST['serialNum45'])." </td> 
<td>".strip_tags($_POST['manf45'])." </td> 
<td>".strip_tags($_POST['psid45'])." </td> 
<td>".strip_tags($_POST['acqDate45'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description46'])." </td> 
<td>".strip_tags($_POST['assetTag46'])." </td> 
<td>".strip_tags($_POST['serialNum46'])." </td> 
<td>".strip_tags($_POST['manf46'])." </td> 
<td>".strip_tags($_POST['psid46'])." </td> 
<td>".strip_tags($_POST['acqDate46'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description47'])." </td> 
<td>".strip_tags($_POST['assetTag47'])." </td> 
<td>".strip_tags($_POST['serialNum47'])." </td> 
<td>".strip_tags($_POST['manf47'])." </td> 
<td>".strip_tags($_POST['psid47'])." </td> 
<td>".strip_tags($_POST['acqDate47'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description48'])." </td> 
<td>".strip_tags($_POST['assetTag48'])." </td> 
<td>".strip_tags($_POST['serialNum48'])." </td> 
<td>".strip_tags($_POST['manf48'])." </td> 
<td>".strip_tags($_POST['psid48'])." </td> 
<td>".strip_tags($_POST['acqDate48'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description49'])." </td> 
<td>".strip_tags($_POST['assetTag49'])." </td> 
<td>".strip_tags($_POST['serialNum49'])." </td> 
<td>".strip_tags($_POST['manf49'])." </td> 
<td>".strip_tags($_POST['psid49'])." </td> 
<td>".strip_tags($_POST['acqDate49'])." </td> 
</tr>";

$message .="<tr>
<td>".strip_tags($_POST['description50'])." </td> 
<td>".strip_tags($_POST['assetTag50'])." </td> 
<td>".strip_tags($_POST['serialNum50'])." </td> 
<td>".strip_tags($_POST['manf50'])." </td> 
<td>".strip_tags($_POST['psid50'])." </td> 
<td>".strip_tags($_POST['acqDate50'])." </td> 
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


</tr>

<tr>

<td>

<h5> Prepared by (Office Use Only):_______________________</h5>

</td>


<td>

<h5> Packaged by (Office Use Only):_______________________</h5>

</td>

<td>

<h5> Date:_______________________</h5>

</td>

</tr>

";

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

<h2> SCS Accessory and Device Asset Disposition Form </h2> 


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

<th>
Device Quantity: {$_POST['quantity']}

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
    <th>Accessory Asset Description</th>
      <th>Accessory Quantity</th>
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
    <td text-align = center; >{$_POST['adescription1']} </td>
    <td>{$_POST['aqty1']}</td>
    <td>{$_POST['apsid1']}</td>
  </tr>
  
    <tr>
    <td text-align = center; >{$_POST['adescription2']} </td>
    <td>{$_POST['aqty2']}</td>
    <td>{$_POST['apsid2']}</td>
  </tr>

   <tr>
    <td text-align = center; >{$_POST['adescription3']} </td>
    <td>{$_POST['aqty3']}</td>
    <td>{$_POST['apsid3']}</td>
  </tr>
  
     <tr>
    <td text-align = center; >{$_POST['adescription4']} </td>
    <td>{$_POST['aqty4']}</td>
    <td>{$_POST['apsid4']}</td>
  </tr>
  
     <tr>
    <td text-align = center; >{$_POST['adescription5']} </td>
    <td>{$_POST['aqty5']}</td>
    <td>{$_POST['apsid5']}</td>
  </tr>


 
  </tbody>
 

</table>


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

<tr>

<td>

<h5> Prepared by (Office Use Only):_______________________</h5>

</td>


<td>

<h5> Packaged by (Office Use Only):_______________________</h5>

</td>

<td>

<h5> Date:_______________________</h5>

</td>


</tr>

</table>


";



//Both Code this 
$toDivision = $_POST['toDivision'];
$fromDivision = $_POST['fromDivision'];
$indicateType = $_POST['indicateType'];
$tDate = $_POST['tDate'];
$submissionId = $_POST['submissionId'];
$email = $_POST['email'];
$quantity = $_POST['quantity'];


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

$description2 = $_POST['description2'];
$assetTag2 = $_POST['assetTag2'];
$serialNum2 = $_POST['serialNum2'];
$manf2 = $_POST['manf2'];
$psid2 = $_POST['psid2'];
$acqDate2 = $_POST['acqDate2'];

$description3 = $_POST['description3'];
$assetTag3 = $_POST['assetTag3'];
$serialNum3 = $_POST['serialNum3'];
$manf3 = $_POST['manf3'];
$psid3 = $_POST['psid3'];
$acqDate3 = $_POST['acqDate3'];

$description4 = $_POST['description4'];
$assetTag4 = $_POST['assetTag4'];
$serialNum4 = $_POST['serialNum4'];
$manf4 = $_POST['manf4'];
$psid4 = $_POST['psid4'];
$acqDate4 = $_POST['acqDate4'];
 
$description5 = $_POST['description5'];
$assetTag5 = $_POST['assetTag5'];
$serialNum5 = $_POST['serialNum5'];
$manf5 = $_POST['manf5'];
$psid5 = $_POST['psid5'];
$acqDate5 = $_POST['acqDate5'];
 
$description6 = $_POST['description6'];
$assetTag6 = $_POST['assetTag6'];
$serialNum6 = $_POST['serialNum6'];
$manf6 = $_POST['manf6'];
$psid6 = $_POST['psid6'];
$acqDate6 = $_POST['acqDate6'];
 
$description7 = $_POST['description7'];
$assetTag7 = $_POST['assetTag7'];
$serialNum7 = $_POST['serialNum7'];
$manf7 = $_POST['manf7'];
$psid7 = $_POST['psid7'];
$acqDate7 = $_POST['acqDate7'];
 
$description8 = $_POST['description8'];
$assetTag8 = $_POST['assetTag8'];
$serialNum8 = $_POST['serialNum8'];
$manf8 = $_POST['manf8'];
$psid8 = $_POST['psid8'];
$acqDate8 = $_POST['acqDate8'];
 
$description9 = $_POST['description9'];
$assetTag9 = $_POST['assetTag9'];
$serialNum9 = $_POST['serialNum9'];
$manf9 = $_POST['manf9'];
$psid9 = $_POST['psid9'];
$acqDate9 = $_POST['acqDate9'];
 
$description10 = $_POST['description10'];
$assetTag10 = $_POST['assetTag10'];
$serialNum10 = $_POST['serialNum10'];
$manf10 = $_POST['manf10'];
$psid10 = $_POST['psid10'];
$acqDate10 = $_POST['acqDate10'];
 
$description11 = $_POST['description11'];
$assetTag11 = $_POST['assetTag11'];
$serialNum11 = $_POST['serialNum11'];
$manf11 = $_POST['manf11'];
$psid11 = $_POST['psid11'];
$acqDate11 = $_POST['acqDate11'];
 
$description12 = $_POST['description12'];
$assetTag12 = $_POST['assetTag12'];
$serialNum12 = $_POST['serialNum12'];
$manf12 = $_POST['manf12'];
$psid12 = $_POST['psid12'];
$acqDate12 = $_POST['acqDate12'];
 
$description13 = $_POST['description13'];
$assetTag13 = $_POST['assetTag13'];
$serialNum13 = $_POST['serialNum13'];
$manf13 = $_POST['manf13'];
$psid13 = $_POST['psid13'];
$acqDate13 = $_POST['acqDate13'];
 
$description14 = $_POST['description14'];
$assetTag14 = $_POST['assetTag14'];
$serialNum14 = $_POST['serialNum14'];
$manf14 = $_POST['manf14'];
$psid14 = $_POST['psid14'];
$acqDate14 = $_POST['acqDate14'];
 
$description15 = $_POST['description15'];
$assetTag15 = $_POST['assetTag15'];
$serialNum15 = $_POST['serialNum15'];
$manf15 = $_POST['manf15'];
$psid15 = $_POST['psid15'];
$acqDate15 = $_POST['acqDate15'];
 
$description16 = $_POST['description16'];
$assetTag16 = $_POST['assetTag16'];
$serialNum16 = $_POST['serialNum16'];
$manf16 = $_POST['manf16'];
$psid16 = $_POST['psid16'];
$acqDate16 = $_POST['acqDate16'];
 
$description17 = $_POST['description17'];
$assetTag17 = $_POST['assetTag17'];
$serialNum17 = $_POST['serialNum17'];
$manf17 = $_POST['manf17'];
$psid17 = $_POST['psid17'];
$acqDate17 = $_POST['acqDate17'];
 
$description18 = $_POST['description18'];
$assetTag18 = $_POST['assetTag18'];
$serialNum18 = $_POST['serialNum18'];
$manf18 = $_POST['manf18'];
$psid18 = $_POST['psid18'];
$acqDate18 = $_POST['acqDate18'];
 
$description19 = $_POST['description19'];
$assetTag19 = $_POST['assetTag19'];
$serialNum19 = $_POST['serialNum19'];
$manf19 = $_POST['manf19'];
$psid19 = $_POST['psid19'];
$acqDate19 = $_POST['acqDate19'];
 
$description20 = $_POST['description20'];
$assetTag20 = $_POST['assetTag20'];
$serialNum20 = $_POST['serialNum20'];
$manf20 = $_POST['manf20'];
$psid20 = $_POST['psid20'];
$acqDate20 = $_POST['acqDate20'];
 
$description21 = $_POST['description21'];
$assetTag21 = $_POST['assetTag21'];
$serialNum21 = $_POST['serialNum21'];
$manf21 = $_POST['manf21'];
$psid21 = $_POST['psid21'];
$acqDate21 = $_POST['acqDate21'];
 
$description22 = $_POST['description22'];
$assetTag22 = $_POST['assetTag22'];
$serialNum22 = $_POST['serialNum22'];
$manf22 = $_POST['manf22'];
$psid22 = $_POST['psid22'];
$acqDate22 = $_POST['acqDate22'];
 
$description23 = $_POST['description23'];
$assetTag23 = $_POST['assetTag23'];
$serialNum23 = $_POST['serialNum23'];
$manf23 = $_POST['manf23'];
$psid23 = $_POST['psid23'];
$acqDate23 = $_POST['acqDate23'];
 
$description24 = $_POST['description24'];
$assetTag24 = $_POST['assetTag24'];
$serialNum24 = $_POST['serialNum24'];
$manf24 = $_POST['manf24'];
$psid24 = $_POST['psid24'];
$acqDate24 = $_POST['acqDate24'];
 
$description25 = $_POST['description25'];
$assetTag25 = $_POST['assetTag25'];
$serialNum25 = $_POST['serialNum25'];
$manf25 = $_POST['manf25'];
$psid25 = $_POST['psid25'];
$acqDate25 = $_POST['acqDate25'];
 
$description26 = $_POST['description26'];
$assetTag26 = $_POST['assetTag26'];
$serialNum26 = $_POST['serialNum26'];
$manf26 = $_POST['manf26'];
$psid26 = $_POST['psid26'];
$acqDate26 = $_POST['acqDate26'];
 
$description27 = $_POST['description27'];
$assetTag27 = $_POST['assetTag27'];
$serialNum27 = $_POST['serialNum27'];
$manf27 = $_POST['manf27'];
$psid27 = $_POST['psid27'];
$acqDate27 = $_POST['acqDate27'];
 
$description28 = $_POST['description28'];
$assetTag28 = $_POST['assetTag28'];
$serialNum28 = $_POST['serialNum28'];
$manf28 = $_POST['manf28'];
$psid28 = $_POST['psid28'];
$acqDate28 = $_POST['acqDate28'];
 
$description29 = $_POST['description29'];
$assetTag29 = $_POST['assetTag29'];
$serialNum29 = $_POST['serialNum29'];
$manf29 = $_POST['manf29'];
$psid29 = $_POST['psid29'];
$acqDate29 = $_POST['acqDate29'];
 
$description30 = $_POST['description30'];
$assetTag30 = $_POST['assetTag30'];
$serialNum30 = $_POST['serialNum30'];
$manf30 = $_POST['manf30'];
$psid30 = $_POST['psid30'];
$acqDate30 = $_POST['acqDate30'];
 
$description31 = $_POST['description31'];
$assetTag31 = $_POST['assetTag31'];
$serialNum31 = $_POST['serialNum31'];
$manf31 = $_POST['manf31'];
$psid31 = $_POST['psid31'];
$acqDate31 = $_POST['acqDate31'];
 
$description32 = $_POST['description32'];
$assetTag32 = $_POST['assetTag32'];
$serialNum32 = $_POST['serialNum32'];
$manf32 = $_POST['manf32'];
$psid32 = $_POST['psid32'];
$acqDate32 = $_POST['acqDate32'];
 
$description33 = $_POST['description33'];
$assetTag33 = $_POST['assetTag33'];
$serialNum33 = $_POST['serialNum33'];
$manf33 = $_POST['manf33'];
$psid33 = $_POST['psid33'];
$acqDate33 = $_POST['acqDate33'];
 
$description34 = $_POST['description34'];
$assetTag34 = $_POST['assetTag34'];
$serialNum34 = $_POST['serialNum34'];
$manf34 = $_POST['manf34'];
$psid34 = $_POST['psid34'];
$acqDate34 = $_POST['acqDate34'];
 
$description35 = $_POST['description35'];
$assetTag35 = $_POST['assetTag35'];
$serialNum35 = $_POST['serialNum35'];
$manf35 = $_POST['manf35'];
$psid35 = $_POST['psid35'];
$acqDate35 = $_POST['acqDate35'];
 
$description36 = $_POST['description36'];
$assetTag36 = $_POST['assetTag36'];
$serialNum36 = $_POST['serialNum36'];
$manf36 = $_POST['manf36'];
$psid36 = $_POST['psid36'];
$acqDate36 = $_POST['acqDate36'];
 
$description37 = $_POST['description37'];
$assetTag37 = $_POST['assetTag37'];
$serialNum37 = $_POST['serialNum37'];
$manf37 = $_POST['manf37'];
$psid37 = $_POST['psid37'];
$acqDate37 = $_POST['acqDate37'];
 
$description38 = $_POST['description38'];
$assetTag38 = $_POST['assetTag38'];
$serialNum38 = $_POST['serialNum38'];
$manf38 = $_POST['manf38'];
$psid38 = $_POST['psid38'];
$acqDate38 = $_POST['acqDate38'];
 
$description39 = $_POST['description39'];
$assetTag39 = $_POST['assetTag39'];
$serialNum39 = $_POST['serialNum39'];
$manf39 = $_POST['manf39'];
$psid39 = $_POST['psid39'];
$acqDate39 = $_POST['acqDate39'];
 
$description40 = $_POST['description40'];
$assetTag40 = $_POST['assetTag40'];
$serialNum40 = $_POST['serialNum40'];
$manf40 = $_POST['manf40'];
$psid40 = $_POST['psid40'];
$acqDate40 = $_POST['acqDate40'];
 
$description41 = $_POST['description41'];
$assetTag41 = $_POST['assetTag41'];
$serialNum41 = $_POST['serialNum41'];
$manf41 = $_POST['manf41'];
$psid41 = $_POST['psid41'];
$acqDate41 = $_POST['acqDate41'];
 
$description42 = $_POST['description42'];
$assetTag42 = $_POST['assetTag42'];
$serialNum42 = $_POST['serialNum42'];
$manf42 = $_POST['manf42'];
$psid42 = $_POST['psid42'];
$acqDate42 = $_POST['acqDate42'];
 
$description43 = $_POST['description43'];
$assetTag43 = $_POST['assetTag43'];
$serialNum43 = $_POST['serialNum43'];
$manf43 = $_POST['manf43'];
$psid43 = $_POST['psid43'];
$acqDate43 = $_POST['acqDate43'];
 
$description44 = $_POST['description44'];
$assetTag44 = $_POST['assetTag44'];
$serialNum44 = $_POST['serialNum44'];
$manf44 = $_POST['manf44'];
$psid44 = $_POST['psid44'];
$acqDate44 = $_POST['acqDate44'];
 
$description45 = $_POST['description45'];
$assetTag45 = $_POST['assetTag45'];
$serialNum45 = $_POST['serialNum45'];
$manf45 = $_POST['manf45'];
$psid45 = $_POST['psid45'];
$acqDate45 = $_POST['acqDate45'];
 
$description46 = $_POST['description46'];
$assetTag46 = $_POST['assetTag46'];
$serialNum46 = $_POST['serialNum46'];
$manf46 = $_POST['manf46'];
$psid46 = $_POST['psid46'];
$acqDate46 = $_POST['acqDate46'];
 
$description47 = $_POST['description47'];
$assetTag47 = $_POST['assetTag47'];
$serialNum47 = $_POST['serialNum47'];
$manf47 = $_POST['manf47'];
$psid47 = $_POST['psid47'];
$acqDate47 = $_POST['acqDate47'];
 
$description48 = $_POST['description48'];
$assetTag48 = $_POST['assetTag48'];
$serialNum48 = $_POST['serialNum48'];
$manf48 = $_POST['manf48'];
$psid48 = $_POST['psid48'];
$acqDate48 = $_POST['acqDate48'];
 
$description49 = $_POST['description49'];
$assetTag49 = $_POST['assetTag49'];
$serialNum49 = $_POST['serialNum49'];
$manf49 = $_POST['manf49'];
$psid49 = $_POST['psid49'];
$acqDate49 = $_POST['acqDate49'];
 
$description50 = $_POST['description50'];
$assetTag50 = $_POST['assetTag50'];
$serialNum50 = $_POST['serialNum50'];
$manf50 = $_POST['manf50'];
$psid50 = $_POST['psid50'];
$acqDate50 = $_POST['acqDate50'];
 
 



//Accessory Database Code for Arrays
$adescriptionz = array("$adescription1", "$adescription2", "$adescription3", "$adescription4","$adescription5");


$aqtyz = array("$aqty1", "$aqty2", "$aqty3", "$aqty4","$aqty5" );



$apsidz = array("$apsid1", "$apsid2", "$apsid3","$apsid4","$apsid5");




//Device Database Code for Arrays

$descriptionz = array("$description1", "$description2", "$description3", "$description4","$description5","$description6","$description7","$description8","$description9","$description10","$description11","$description12","$description13","$description14","$description15","$description16","$description17","$description18","$description19","$description20","$description21","$description22","$description23","$description24","$description25","$description26","$description27","$description28","$description29","$description30","$description31","$description32","$description33","$description34","$description35","$description36","$description37","$description38","$description39","$description40","$description41","$description42","$description43","$description44","$description45","$description46","$description47","$description48","$description49","$description50");

$assetTagz = array("$assetTag1", "$assetTag2", "$assetTag3","$assetTag4","$assetTag5","$assetTag6","$assetTag7","$assetTag8","$assetTag9","$assetTag10","$assetTag11","$assetTag12","$assetTag13","$assetTag14","$assetTag15","$assetTag16","$assetTag17","$assetTag18","$assetTag19","$assetTag20","$assetTag21","$assetTag22","$assetTag23","$assetTag24","$assetTag25","$assetTag26","$assetTag27","$assetTag28","$assetTag29","$assetTag30","$assetTag31","$assetTag32","$assetTag33","$assetTag34","$assetTag35","$assetTag36","$assetTag37","$assetTag38","$assetTag39","$assetTag40","$assetTag41","$assetTag42","$assetTag43","$assetTag44","$assetTag45","$assetTag46","$assetTag47","$assetTag48","$assetTag49","$assetTag50");
$serialNumz = array("$serialNum1", "$serialNum2", "$serialNum3", "$serialNum4","$serialNum5","$serialNum6","$serialNum7","$serialNum8","$serialNum9","$serialNum10","$serialNum11","$serialNum12","$serialNum13","$serialNum14","$serialNum15","$serialNum16","$serialNum17","$serialNum18","$serialNum19","$serialNum20","$serialNum21","$serialNum22","$serialNum23","$serialNum24","$serialNum25","$serialNum26","$serialNum27","$serialNum28","$serialNum29","$serialNum30","$serialNum31","$serialNum32","$serialNum33","$serialNum34","$serialNum35","$serialNum36","$serialNum37","$serialNum38","$serialNum39","$serialNum40","$serialNum41","$serialNum42","$serialNum43","$serialNum44","$serialNum45","$serialNum46","$serialNum47","$serialNum48","$serialNum49","$serialNum50");
$manfz = array("$manf1", "$manf2", "$manf3","$manf4","$manf5","$manf6","$manf7","$manf8","$manf9","$manf10","$manf11","$manf12","$manf13","$manf14","$manf15","$manf16","$manf17","$manf18","$manf19","$manf20","$manf21","$manf22","$manf23","$manf24","$manf25","$manf26","$manf27","$manf28","$manf29","$manf30","$manf31","$manf32","$manf33","$manf34","$manf35","$manf36","$manf37","$manf38","$manf39","$manf40","$manf41","$manf42","$manf43","$manf44","$manf45","$manf46","$manf47","$manf48","$manf49","$manf50");
$psidz = array("$psid1", "$psid2", "$psid3","$psid4","$psid5","$psid6","$psid7","$psid8","$psid9","$psid10","$psid11","$psid12","$psid13","$psid14","$psid15","$psid16","$psid17","$psid18","$psid19","$psid20","$psid21","$psid22","$psid23","$psid24","$psid25","$psid26","$psid27","$psid28","$psid29","$psid30","$psid31","$psid32","$psid33","$psid34","$psid35","$psid36","$psid37","$psid38","$psid39","$psid40","$psid41","$psid42","$psid43","$psid44","$psid45","$psid46","$psid47","$psid48","$psid49","$psid50" );
$acqDatez = array("$acqDate1", "$acqDate2", "$acqDate3", "$acqDate4","$acqDate5","$acqDate6","$acqDate7","$acqDate8","$acqDate9","$acqDate10","$acqDate11","$acqDate12","$acqDate13","$acqDate14","$acqDate15","$acqDate16","$acqDate17","$acqDate18","$acqDate19","$acqDate20","$acqDate21","$acqDate22","$acqDate23","$acqDate24","$acqDate25","$acqDate26","$acqDate27","$acqDate28","$acqDate29","$acqDate30","$acqDate31","$acqDate32","$acqDate33","$acqDate34","$acqDate35","$acqDate36","$acqDate37","$acqDate38","$acqDate39","$acqDate40","$acqDate41","$acqDate42","$acqDate43","$acqDate44","$acqDate45","$acqDate46","$acqDate47","$acqDate48","$acqDate49","$acqDate50" );

//Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_accessoryadf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    
$conn1 = new mysqli($db_host, $db_user, $db_pw, $db_name );

if($conn1-> connect_error){
    die('Connection Failed : '.$conn1 -> connect_error);
}else{
    
    
    
 for ($x = 0; $x <=5; $x++){   
     
      if($aqtyz[$x] > 0){
   
    $stmt1 = $conn1->prepare ("INSERT into `Accessory_ ADF` (SubmissionID, email, toDivision, fromDivision, indicateType, date, description, quantity, psid) VALUES (?,?,?,?,?,?,?,?,?)");
    
   
    
   $stmt1->bind_param('sssssssis', $submissionId, $email, $toDivision, $fromDivision, $indicateType, $tDate, $adescriptionz[$x], $aqtyz[$x], $apsidz[$x]);
   
    
   $stmt1-> execute();
    $stmt1-> close();
     
   
   
 }
 }
    
   
    
   
    $conn1->close(); 
    
}
    
   
   



//Device Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_adf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name );

if($conn-> connect_error){
    die('Connection Failed : '.$conn -> connect_error);
}else{
    
    
    
 for ($x = 0; $x <= 50; $x++){   
   if($assetTagz[$x] || $serialNumz[$x] > 0){
    $stmt = $conn->prepare ("INSERT into `Asset Disposition Form` (SubmissionId, email, toDivision, fromDivision, quantity, indicateType, tDate, description, assetTag, serialNum, manf, psid, acqDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
   
    
   $stmt->bind_param('ssssisssissis', $submissionId,$email, $toDivision, $fromDivision, $quantity, $indicateType, $tDate, $descriptionz[$x], $assetTagz[$x], $serialNumz[$x], $manfz[$x], $psidz[$x], $acqDatez[$x]);
   
    
   $stmt-> execute();
    $stmt-> close();
     
   }
   
 }
    
   
    
   
    $conn->close(); 
    
}















?>













