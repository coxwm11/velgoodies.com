<!DOCTYPE html>

<head><meta charset="utf-8">

	<title>Device Asset Check-Off Form</title>
	<link href="adf.css" rel="stylesheet" />
	
	<!--Bootstrap Components Below --><!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	
	
	<script>
	    
	    // This calculates the date

function autoDate () {
	var tDay = new Date();
	var tMonth = tDay.getMonth()+1;
	var tDate = tDay.getDate();
	if ( tMonth < 10) tMonth = "0"+tMonth;
	if ( tDate < 10) tDate = "0"+tDate;
	document.getElementById("tDate").value = tMonth+"/"+tDate+"/"+tDay.getFullYear();
 }


// This loads the date automattically in the date field and loads the form id in the addLoadEvent

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
        
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  autoDate();
  
  
  
  
}); 

	</script>
<body>
 <div class="container-fluid">
<div class="header" ></div>


<!--Navigation/Header Stuff -->
<div class="topnav" id="myTopnav"></div>

<div class="assetDispositionForm">
<h1 id="top" style="color:white;"><img src="Images/scs.jpg" style="width:70px" /> Device Asset Check-Off Form</h1>
</div>  

    
   <br>
   
<input type="button" onClick= "location.href ='https://velgoodies.com/devicecheck.html';" value="Search Submission ID"/>
<button onClick="window.print()">Print this Page
</button>

<br>
<br>
<!--Device Check Form-->

 <iframe src="https://velgoodies.com/devicecheckoff.html" style="width:100%; height:250px;"></iframe>


    
    <br>
    
    <iframe src="https://velgoodies.com/add_remove_wndw.html" style="width:100%; height:500px;"></iframe>
    
    <br>


</div>

<h3><b>Search Results</b></h3>
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
$assetTag = $_POST['assetTag'];
$serialNum = $_POST['serialNum'];




 //Accessory Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_accessoryadf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    $db_name2 = 'coxwm11_adf';
    
$conn1 = new mysqli($db_host, $db_user, $db_pw, $db_name );
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name2 );

 echo"<h3> <u>Accessory ADF Results</u></h3>"; 

if($conn1-> connect_error){
    die('Connection Failed : '.$conn1 -> connect_error);
}else{
    
    
  $resultacc = mysqli_query ($conn1, "SELECT * FROM `Accessory_ ADF` WHERE `SubmissionID` = \"$submissionId\" ");  
  
    if (mysqli_num_rows($resultacc) > 0) {
 
      echo "<table  width =100% border = 1px text-align=center>";

echo "<colgroup>";      
      

echo "<col width =100px>";
echo "<col width =150px>";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";

echo "</colgroup>"; 

echo "<tr>";   



echo "<th >
Date 
</th>";

echo "<th>
Submission ID 
</th>";

echo "<th >
From School/Department 
</th>";

echo "<th >
To School/Department
</th>";

echo "<th >
Quantity
</th>";

echo "<th >
Description
</th>";

echo "<th >
PSID
</th>";



echo "<th bgcolor = #90EE90 >
Accessory Present
</th>";


echo "</tr>";


      
 

 while($row = $resultacc->fetch_assoc()) {
     

 

echo "<tr >";

 

echo "<td  >" . $row['date'] . "</td>";
echo "<td  >" . $row['SubmissionID'] . "</td>";
echo "<td >" . $row['fromDivision'] . "</td>";

echo "<td >" . $row['toDivision'] . "</td>";
echo "<td style=text-align:center;>" . $row['quantity'] . "</td>";
echo "<td >" . $row['description'] . "</td>";

echo "<td >" . $row['psid'] . "</td>";

echo"<td style=text-align:center;> <input type='checkbox' name='checkBox' </td> ";



echo "</tr>";

      
 
 
    
  }
  
  echo "</table>";
 

$resultacc-> close();
  
  
}

else {
    
    
      echo "<h4> <b>0 Accessory Results Found</b></h4> ";
    
}
  

    $conn1->close();
   
   
    
}


  
   

//Device Database Connection


  
  
    
 echo"<h3> <u>Device ADF Results </u></h3>";   
    


if($conn-> connect_error){
    
    die('Connection Failed : '.$conn -> connect_error);
    
   
   
}else{
    
    
    $result = mysqli_query ($conn, "SELECT * FROM `Asset Disposition Form` WHERE `SubmissionId` = \"$submissionId\" ORDER BY `assetTag` ASC ");
    
     $result1 = mysqli_query ($conn, "SELECT * FROM `Asset Disposition Form` WHERE `assetTag` = \"$assetTag\" ORDER BY `fromDivision` ASC ");
     
    
        

    
    
  if (mysqli_num_rows($result) > 0) {
 
      echo "<table  width =100% border = 1px text-align=center>";

echo "<colgroup>";      
      

echo "<col width =100px>";
echo "<col width =150px>";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col  >";
echo "<col >";
echo "<col >";

echo "</colgroup>"; 

echo "<tr>";   



echo "<th >
Date 
</th>";

echo "<th>
Submission ID 
</th>";

echo "<th >
From School/Department 
</th>";

echo "<th >
To School/Department
</th>";

echo "<th >
Quantity
</th>";

echo "<th >
Description
</th>";

echo "<th >
PSID
</th>";

echo "<th >
Serial Number
</th>";

echo "<th >
Asset Tag
</th>";

echo "<th bgcolor = #90EE90 >
Device Present
</th>";



echo "<th >
Status
</th>";

echo "<th >
Completion
</th>";

echo "</tr>";


      
 

 while($row = $result->fetch_assoc()) {
     

 

echo "<tr >";

 

echo "<td  >" . $row['tDate'] . "</td>";
echo "<td  >" . $row['SubmissionId'] . "</td>";
echo "<td >" . $row['fromDivision'] . "</td>";

echo "<td >" . $row['toDivision'] . "</td>";
echo "<td style=text-align:center;>" . $row['quantity'] . "</td>";
echo "<td >" . $row['description'] . "</td>";

echo "<td >" . $row['psid'] . "</td>";

echo "<td >" . $row['serialNum'] . "</td>";
echo "<td >" . $row['assetTag'] . "</td>";
echo"<td style=text-align:center;> <input type='checkbox' name='checkBox' </td> ";

echo "<td >" . $row['acqDate'] . "</td>";
echo "<td >" . $row['Completion'] . "</td>";


echo "</tr>";

      
 
 
    
  }
  
  echo "</table>";
  
} 

elseif (mysqli_num_rows($result1) > 0) {
    
    
  echo "<table  width =100% border = 1px text-align=center>";

echo "<colgroup>";      
      

echo "<col width =100px>";
echo "<col width =150px>";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col >";
echo "<col  >";
echo "<col >";
echo "<col >";

echo "</colgroup>"; 

echo "<tr>";



echo "<th >
Date 
</th>";

echo "<th >
Submission ID 
</th>";

echo "<th >
From School/Department 
</th>";

echo "<th >
To School/Department
</th>";

echo "<th >
Quantity
</th>";

echo "<th >
Description
</th>";

echo "<th >
PSID
</th>";

echo "<th >
Serial Number
</th>";

echo "<th >
Asset Tag
</th>";

echo "<th bgcolor = #90EE90 >
Device Present
</th>";



echo "<th >
Status
</th>";

echo "<th >
Completion
</th>";


      
 echo "</tr>";

 while($row = $result1->fetch_assoc()) {
     
    
    
 




echo "<tr >";

 

echo "<td  >" . $row['tDate'] . "</td>";
echo "<td  >" . $row['SubmissionId'] . "</td>";
echo "<td >" . $row['fromDivision'] . "</td>";

echo "<td >" . $row['toDivision'] . "</td>";
echo "<td style=text-align:center;>" . $row['quantity'] . "</td>";
echo "<td >" . $row['description'] . "</td>";

echo "<td >" . $row['psid'] . "</td>";

echo "<td >" . $row['serialNum'] . "</td>";
echo "<td >" . $row['assetTag'] . "</td>";
echo"<td style=text-align:center;> <input type='checkbox' name='checkBox' </td> ";

echo "<td >" . $row['acqDate'] . "</td>";
echo "<td >" . $row['Completion'] . "</td>";


echo "</tr>";

      
 
 
    
  }
  
  echo "</table>";
  
   $result-> close();
     
    $result1-> close();
   
   
  
} 

 

else {
  echo "<h4> <b>0 Device Results Found</b></h4> ";

  
  
   
   
 }
    
   
     $conn->close(); 
   
    
    
}















?>













