<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Asset Disposition Form</title>
	
	<link href="adf.css" rel="stylesheet" />
	
	
	<!--Bootstrap Components Below --><!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" /><!-- jQuery library --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- Latest compiled JavaScript --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	
	
	<script>
  
// Resets Lesson Plan
function myFunction() {
    document.getElementById("adf").reset();
}


  
// Upload Button 
function myUploadFunction() {
    window.open("https://scsk12.sharepoint.com/:f:/s/SCSLessonPLan/El1NhAnJb1tPpTuxX1PsfHwB6X_Nhpr8kenru2GcaoDpqQ?e=naeQn8");
}


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
  
  //formid
  var formIdUnique = Date.now();
var submissionId = formIdUnique; 
document.getElementById("submissionId").value = submissionId;
  
  
}); 



</script>


    
    
    

</head>
<body>
<div class="container-fluid">
<div class="header"></div>

<div class="topnav" id="myTopnav"><a class="active" href="https://www.velgoodies.com">Home</a> <a href="https://outlook.office.com/" target="_blank">Email</a> <a href="http://www.scsk12.org/accessforall/deviceresources.php?PID=1758" target="_blank">Device Support</a> <a class="icon" href="javascript:void(0);" onclick="myFunction()"> </a></div>

<div class="assetDispositionForm">
<h1 id="top" style="color:white;"><img src="Images/scs.jpg" style="width:70px" /> Asset Disposition Form</h1>
</div>

<div class="instructions">
<h5>Instructions: This form is to be used when either adding a new asset, transferring an asset to another location, disposing of an asset, repair and/or reporting stolen asset. Authorization must be obtained from either the school principal, department and/or division head prior to being transferred, disposed or removed from the school&#39;s/division&#39;s inventory. Please list furniture and equipment on separate forms.</h5>
</div>

<form action="samplemail(2).php" id="adf" method="POST" name="adf">
<div style="height:400x;overflow:auto;">
<div class="row">
<div class="col-md-4 col-xs-4">
<h5>From: <select id="fromDivision" name="fromDivision"><option value=""></option><option value="Virtual Education and Logistics Center   LOC: 2385">Virtual Education and Logistics Center LOC: 2385</option> </select></h5>
</div>

<div class="col-md-3 col-xs-3">
<h5>To: <select id="toDivision" name="toDivision"><option value=""></option><option value="Airways Achievement  LOC: 2310">Airways Achievement LOC: 2310</option> </select></h5>
</div>

<div class="col-md-2 col-xs-2">
<h5>Indicate Type: <select id="indicateType" name="indicateType"><option value=""></option><option value="Add">Add</option><option value="Transfer">Transfer</option><option value="Stolen">Stolen</option><option value="Disposal">Disposal</option> </select></h5>
</div>

<div class="col-md-3 col-xs-3">Date: <input id="tDate" name="tDate" type="text" /></div>
</div>
<!--Quantity Row Below-->

<div class="row">
<div class="col-md-3 col-xs-3">Device Quantity: <input id="quantity" name="quantity" type="text" /></div>

<div class="col-md-3 col-xs-3" >Submission ID: <input id="submissionId" name="submissionId" type="text" >  </div>


<div class="col-md-3 col-xs-3" >Email: <input id="email" name="email" type="text" >  </div>
</div>


</div>




<br />
<input onclick="myFunction()" type="button" value="Reset Form" /> <input name="submit" type="submit" value="Submit" /> <!--Stuff goes in between these two buttons --><br />




<!--table style elements below-->



<style type="text/css">.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-rz9m{position:-webkit-sticky;position:sticky;text-align:center;top:-1px;vertical-align:top;will-change:transform}
.tg .tg-0lax{text-align:left;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}



.tg-rz9m{
    background-color:#000000;
    color: white;
   
}

.tg th{ border:1px solid white;}



</style>
<div class="tg-wrap">
<table class="tg" style="undefined;table-layout: fixed; width: 1289px">
	<colgroup>
		<col style="width:100px" />
		<col style="width: 210px" />
		<col style="width: 238px" />
		<col style="width: 217px" />
		<col style="width: 154px" />
		<col style="width: 218px" />
		<col style="width: 152px" />
	</colgroup>
	<thead>
		<tr>
			<th class="tg-rz9m">Number</th>
			<th class="tg-rz9m">Asset Description</th>
			<th class="tg-rz9m">SCS Asset Tag Number</th>
			<th class="tg-rz9m">Serial Number</th>
			<th class="tg-rz9m">Manufacturer</th>
			<th class="tg-rz9m">PSID</th>
			<th class="tg-rz9m">Acquisition Date</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		    
			<td class="number" style="text-align: center; font-weight:bold">1</td>
			<td class="tg-0lax-ad">
			<center>
			<select id="description1" name="description1">
			    
			<option value=""></option>
			<option value="SurfaceGo Tablet">SurfaceGo Tablet</option>
			<option value="Think Pad 11e">Think Pad 11e</option>
			<option value="HP Laptop">HP Laptop</option>
			</select></center>
			</td>

			<td class="tg-0lax">
			<center><input id="assetTag1" name="assetTag1" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum1" name="serialNum1" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf1" name="manf1"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid1" name="psid1" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate1" name="acqDate1" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
		    
		    
		    
			<td class="number" style="text-align: center; font-weight:bold">2</td>
			<td class="tg-0lax-ad">
			<center><select id="description2" name="description2"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag2" name="assetTag2" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum2" name="serialNum2" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf2" name="manf2"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid2" name="psid2" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate2" name="acqDate2" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
		    
		    
		    
		    
		    
			<td class="number" style="text-align: center; font-weight:bold">3</td>
			<td class="tg-0lax-ad">
			<center><select id="description3" name="description3"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag3" name="assetTag3" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum3" name="serialNum3" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf3" name="manf3"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid3" name="psid3" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate3" name="acqDate3" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">4</td>
			<td class="tg-0lax-ad">
			<center><select id="description4" name="description4"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag4" name="assetTag4" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum4" name="serialNum4" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf4" name="manf4"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid4" name="psid4" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate4" name="acqDate4" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">5</td>
			<td class="tg-0lax-ad">
			<center><select id="description5" name="description5"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag5" name="assetTag" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum5" name="serialNum5" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf5" name="manf5"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid5" name="psid5" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate5" name="acqDate5" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">6</td>
			<td class="tg-0lax-ad">
			<center><select id="description6" name="description6"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag6" name="assetTag6" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum6" name="serialNum6" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf6" name="manf6"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid6" name="psid6" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate6" name="acqDate6" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">7</td>
			<td class="tg-0lax-ad">
			<center><select id="description7" name="description7"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag7" name="assetTag7" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum7" name="serialNum7" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf7" name="manf7"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid7" name="psid7" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate7" name="acqDate7" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">8</td>
			<td class="tg-0lax-ad">
			<center><select id="description8" name="description8"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag8" name="assetTag8" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum8" name="serialNum8" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf8" name="manf8"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid8" name="psid8" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate8" name="acqDate8" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">9</td>
			<td class="tg-0lax-ad">
			<center><select id="description9" name="description9"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag9" name="assetTag9" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum9" name="serialNum9" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf9" name="manf9"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid9" name="psid9" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate9" name="acqDate9" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">10</td>
			<td class="tg-0lax-ad">
			<center><select id="description10" name="description10"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag10" name="assetTag10" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum10" name="serialNum10" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf10" name="manf10"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid10" name="psid10" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate10" name="acqDate10" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">11</td>
			<td class="tg-0lax-ad">
			<center><select id="description11" name="description11"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag11" name="assetTag11" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum11" name="serialNum11" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf11" name="manf11"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid11" name="psid11" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate11" name="acqDate11" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">12</td>
			<td class="tg-0lax-ad">
			<center><select id="description12" name="description12"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag12" name="assetTag12" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum12" name="serialNum12" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf12" name="manf12"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid12" name="psid12" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate12" name="acqDate12" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">13</td>
			<td class="tg-0lax-ad">
			<center><select id="description13" name="description13"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag13" name="assetTag13" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum13" name="serialNum13" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf13" name="manf13"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid13" name="psid13" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate13" name="acqDate13" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">14</td>
			<td class="tg-0lax-ad">
			<center><select id="description14" name="description14"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag14" name="assetTag14" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum14" name="serialNum14" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf14" name="manf14"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid14" name="psid14" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate14" name="acqDate14" size="10px" type="text" /></center>
			</td>
		</tr>
		
		
			<tr>
			<td class="number" style="text-align: center; font-weight:bold">15</td>
			<td class="tg-0lax-ad">
			<center><select id="description15" name="description15"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag15" name="assetTag15" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum15" name="serialNum15" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf15" name="manf15"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid15" name="psid15" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate15" name="acqDate15" size="10px" type="text" /></center>
			</td>
		</tr>
		
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">16</td>
			<td class="tg-0lax-ad">
			<center><select id="description16" name="description16"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag16" name="assetTag16" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum16" name="serialNum16" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf16" name="manf16"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid16" name="psid16" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate16" name="acqDate16" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">17</td>
			<td class="tg-0lax-ad">
			<center><select id="description17" name="description17"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag17" name="assetTag17" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum17" name="serialNum17" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf17" name="manf17"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid17" name="psid17" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate17" name="acqDate17" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">18</td>
			<td class="tg-0lax-ad">
			<center><select id="description18" name="description18"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag18" name="assetTag18" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum18" name="serialNum18" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf18" name="manf18"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid18" name="psid18" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate18" name="acqDate18" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">19</td>
			<td class="tg-0lax-ad">
			<center><select id="description19" name="description19"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag19" name="assetTag19" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum19" name="serialNum19" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf19" name="manf19"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid19" name="psid19" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate19" name="acqDate19" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">20</td>
			<td class="tg-0lax-ad">
			<center><select id="description20" name="description20"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag20" name="assetTag20" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum20" name="serialNum20" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf20" name="manf20"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid20" name="psid20" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate20" name="acqDate20" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">21</td>
			<td class="tg-0lax-ad">
			<center><select id="description21" name="description21"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag21" name="assetTag21" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum21" name="serialNum21" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf21" name="manf21"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid21" name="psid21" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate21" name="acqDate21" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">22</td>
			<td class="tg-0lax-ad">
			<center><select id="description22" name="description22"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag22" name="assetTag22" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum22" name="serialNum22" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf22" name="manf22"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid22" name="psid22" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate22" name="acqDate22" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">23</td>
			<td class="tg-0lax-ad">
			<center><select id="description23" name="description23"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag23" name="assetTag23" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum23" name="serialNum23" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf23" name="manf23"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid23" name="psid23" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate23" name="acqDate23" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">24</td>
			<td class="tg-0lax-ad">
			<center><select id="description24" name="description24"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag24" name="assetTag24" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum24" name="serialNum24" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf24" name="manf24"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid24" name="psid24" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate24" name="acqDate24" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">25</td>
			<td class="tg-0lax-ad">
			<center><select id="description25" name="description25"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag25" name="assetTag25" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum25" name="serialNum25" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf25" name="manf25"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid25" name="psid25" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate25" name="acqDate25" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">26</td>
			<td class="tg-0lax-ad">
			<center><select id="description26" name="description26"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag26" name="assetTag26" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum26" name="serialNum26" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf26" name="manf26"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid26" name="psid26" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate26" name="acqDate26" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">27</td>
			<td class="tg-0lax-ad">
			<center><select id="description27" name="description27"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag27" name="assetTag27" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum27" name="serialNum27" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf27" name="manf27"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid27" name="psid27" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate27" name="acqDate27" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">28</td>
			<td class="tg-0lax-ad">
			<center><select id="description28" name="description28"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag28" name="assetTag28" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum28" name="serialNum28" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf28" name="manf28"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid28" name="psid28" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate28" name="acqDate28" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">29</td>
			<td class="tg-0lax-ad">
			<center><select id="description29" name="description29"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag29" name="assetTag29" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum29" name="serialNum29" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf29" name="manf29"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid29" name="psid29" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate29" name="acqDate29" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">30</td>
			<td class="tg-0lax-ad">
			<center><select id="description30" name="description30"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag30" name="assetTag30" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum30" name="serialNum30" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf30" name="manf30"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid30" name="psid30" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate30" name="acqDate30" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">31</td>
			<td class="tg-0lax-ad">
			<center><select id="description31" name="description31"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag31" name="assetTag31" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum31" name="serialNum31" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf31" name="manf31"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid31" name="psid31" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate31" name="acqDate31" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">32</td>
			<td class="tg-0lax-ad">
			<center><select id="description32" name="description32"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag32" name="assetTag32" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum32" name="serialNum32" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf32" name="manf32"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid32" name="psid32" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate32" name="acqDate32" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">33</td>
			<td class="tg-0lax-ad">
			<center><select id="description33" name="description33"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag33" name="assetTag33" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum33" name="serialNum33" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf33" name="manf33"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid33" name="psid33" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate33" name="acqDate33" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">34</td>
			<td class="tg-0lax-ad">
			<center><select id="description34" name="description34"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag34" name="assetTag34" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum34" name="serialNum34" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf34" name="manf34"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid34" name="psid34" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate34" name="acqDate34" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">35</td>
			<td class="tg-0lax-ad">
			<center><select id="description35" name="description35"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag35" name="assetTag35" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum35" name="serialNum35" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf35" name="manf35"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid35" name="psid35" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate35" name="acqDate35" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">36</td>
			<td class="tg-0lax-ad">
			<center><select id="description36" name="description36"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag36" name="assetTag36" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum36" name="serialNum36" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf36" name="manf36"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid36" name="psid36" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate36" name="acqDate36" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">37</td>
			<td class="tg-0lax-ad">
			<center><select id="description37" name="description37"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag37" name="assetTag37" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum37" name="serialNum37" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf37" name="manf37"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid37" name="psid37" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate37" name="acqDate37" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">38</td>
			<td class="tg-0lax-ad">
			<center><select id="description38" name="description38"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag38" name="assetTag38" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum38" name="serialNum38" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf38" name="manf38"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid38" name="psid38" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate38" name="acqDate38" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">39</td>
			<td class="tg-0lax-ad">
			<center><select id="description39" name="description39"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag39" name="assetTag39" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum39" name="serialNum39" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf39" name="manf39"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid39" name="psid39" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate39" name="acqDate39" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">40</td>
			<td class="tg-0lax-ad">
			<center><select id="description40" name="description40"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag40" name="assetTag40" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum40" name="serialNum40" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf40" name="manf40"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid40" name="psid40" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate40" name="acqDate40" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">41</td>
			<td class="tg-0lax-ad">
			<center><select id="description41" name="description41"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag41" name="assetTag41" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum41" name="serialNum41" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf41" name="manf41"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid41" name="psid41" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate41" name="acqDate41" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">42</td>
			<td class="tg-0lax-ad">
			<center><select id="description42" name="description42"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag42" name="assetTag42" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum42" name="serialNum42" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf42" name="manf42"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid42" name="psid42" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate42" name="acqDate42" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">43</td>
			<td class="tg-0lax-ad">
			<center><select id="description43" name="description43"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag43" name="assetTag43" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum43" name="serialNum43" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf43" name="manf43"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid43" name="psid43" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate43" name="acqDate43" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">44</td>
			<td class="tg-0lax-ad">
			<center><select id="description44" name="description44"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag44" name="assetTag44" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum44" name="serialNum44" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf44" name="manf44"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid44" name="psid44" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate44" name="acqDate44" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">45</td>
			<td class="tg-0lax-ad">
			<center><select id="description45" name="description45"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag45" name="assetTag45" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum45" name="serialNum45" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf45" name="manf45"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid45" name="psid45" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate45" name="acqDate45" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">46</td>
			<td class="tg-0lax-ad">
			<center><select id="description46" name="description46"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag46" name="assetTag46" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum46" name="serialNum46" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf46" name="manf46"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid46" name="psid46" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate46" name="acqDate46" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">47</td>
			<td class="tg-0lax-ad">
			<center><select id="description47" name="description47"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag47" name="assetTag47" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum47" name="serialNum47" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf47" name="manf47"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid47" name="psid47" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate47" name="acqDate47" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">48</td>
			<td class="tg-0lax-ad">
			<center><select id="description48" name="description48"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag48" name="assetTag48" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum48" name="serialNum48" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf48" name="manf48"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid48" name="psid48" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate48" name="acqDate48" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">49</td>
			<td class="tg-0lax-ad">
			<center><select id="description49" name="description49"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag49" name="assetTag49" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum49" name="serialNum49" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf49" name="manf49"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid49" name="psid49" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate49" name="acqDate49" size="10px" type="text" /></center>
			</td>
		</tr>
		<tr>
			<td class="number" style="text-align: center; font-weight:bold">50</td>
			<td class="tg-0lax-ad">
			<center><select id="description50" name="description50"><option value=""></option><option value="SurfaceGo Tablet">SurfaceGo Tablet</option><option value="Think Pad 11e">Think Pad 11e</option><option value="HP Laptop">HP Laptop</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="assetTag50" name="assetTag50" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="serialNum50" name="serialNum50" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><select id="manf50" name="manf50"><option value=""></option><option value="Microsoft">Microsoft</option><option value="Lenovo">Lenovo</option> </select></center>
			</td>
			<td class="tg-0lax">
			<center><input id="psid50" name="psid50" type="text" /></center>
			</td>
			<td class="tg-0lax">
			<center><input id="acqDate50" name="acqDate50" size="10px" type="text" /></center>
			</td>
		</tr>
	</tbody>
</table>
</div>
<br />
<input onclick="myFunction()" type="button" value="Reset Form" /> <input name="submit" type="submit" value="Submit" /></div>
</form>

<footer>For additional support, please send an email to device_support@scsk12.org.</footer>
</div>
<!--Container Closing Div --></body>
</html>
