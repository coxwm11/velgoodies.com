<?php





//Accessory Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_accessoryadf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    $db_name2 = 'coxwm11_adf';
    
$conn1 = new mysqli($db_host, $db_user, $db_pw, $db_name );
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name2 ); 

$row = mysqli_fetch_assoc($result);

//Both Code this 

$submissionId = $_POST['q5_submissionId'];
$btnName = $_POST['action'];
$todaysDate = $_POST['todaysDate'];






$query = "SELECT * FROM `Asset Disposition Form` WHERE `SubmissionId` = '$submissionId' ORDER BY `assetTag` ASC ";
$result = mysqli_query ($conn, $query);
$num_of_rows = mysqli_num_rows($result);






/*Accessories
if($conn1-> connect_error){
    die('Connection Failed : '.$conn1 -> connect_error);
}else{
    
    
  $resultacc = mysqli_query ($conn1, "SELECT * FROM `Accessory_ ADF` WHERE `SubmissionID` = \"$submissionId\" ");  
}

*/


if($conn-> connect_error){
    
    die('Connection Failed : '.$conn -> connect_error);
    
   
   
}else{
    
    
  
  




?>





<!--PHP Code Above this Line-->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F221785284238059" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F221785284238059" title="oEmbed Form">
<meta property="og:title" content="Device Asset Check-Off Form" >
<meta property="og:url" content="https://form.jotform.com/221785284238059" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
<link rel="canonical" href="https://form.jotform.com/221785284238059" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Device Asset Check-Off Form</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.34379" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.34379" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 1200px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      .supernova {
        background-image: url("https://www.jotform.com/uploads/coxw1/form_files/blur-abstract-wa.62bb2fdd9ea973.62798066.jpg");
      }
      #stage {
        background-image: url("https://www.jotform.com/uploads/coxw1/form_files/blur-abstract-wa.62bb2fdd9ea973.62798066.jpg");
      }
    
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/coxw1/form_files/MSCS-Logo-Reverse-White-Transparent-Bkg.6298d6fa7763b8.61777119.png");
      display: inline-block;
      height: 140px;
      position: absolute;
      background-size: 165px 140px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 160px !important;
    }
    .form-all:before {
      top: -150px;
      background-position: top center;
      left: 0;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.34379" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.34379" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.34379" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.34379" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.34379" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.34379" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1656603142326" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"id":"action_1656600665606","skipTo":"page-4: Last Page","isError":false}],"id":"1656600672864","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1656600665606","field":"3","operator":"equals","value":"Remove Device","isError":false}],"type":"page"},{"action":[{"id":"action_0_1656600803286","skipTo":"page-3","isError":false}],"id":"1656600662511","index":"1","link":"Any","priority":"1","terms":[{"id":"term_0_1656600803286","field":"3","operator":"equals","value":"Add Device","isError":false}],"type":"page"},{"action":[{"id":"action_1656600629289","skipTo":"page-2","isError":false}],"id":"1656600644392","index":"2","link":"Any","priority":"2","terms":[{"id":"term_1656600629289","field":"3","operator":"equals","value":"Device Check Completion","isError":false}],"type":"page"},{"action":[{"id":"action_1_1656601337229","visibility":"Show","isError":false,"field":"34"},{"id":"action_2_1656601337229","visibility":"Show","isError":false,"field":"31"}],"id":"1656511839540","index":"7","link":"Any","priority":"7","terms":[{"id":"term_0_1656601337229","field":"30","operator":"equals","value":"Serial Number","isError":false}],"type":"field"},{"action":[{"id":"action_1_1656601350700","visibility":"Show","isError":false,"field":"34"},{"id":"action_2_1656601350700","visibility":"Show","isError":false,"field":"29"}],"id":"1656511802612","index":"8","link":"Any","priority":"8","terms":[{"id":"term_0_1656601350700","field":"30","operator":"equals","value":"Asset Tag","isError":false}],"type":"field"}]);	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_5').setAttribute('tabindex',0);

 JotForm.formatDate({date:(new Date()), dateField:$("id_"+4)});
if (window.JotForm && JotForm.accessible) $('input_36').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_36').hint('Search by the Asset Tag Number...');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_25').setAttribute('tabindex',0);

 JotForm.formatDate({date:(new Date()), dateField:$("id_"+13)});
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_15').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_27').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_28').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_16').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_17').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_24').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_29').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_31').setAttribute('tabindex',0);
      JotForm.alterTexts(undefined);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Device Asset Check-Off Form","type":"control_head"},{"name":"addDevice2","qid":"2","text":"Add Device","type":"control_button"},{"description":"","name":"selectThe","qid":"3","text":"Select the Action Below:","type":"control_radio"},{"description":"","name":"dateChecked","qid":"4","text":"Date Checked","type":"control_datetime"},{"description":"","name":"submissionId","qid":"5","subLabel":"","text":"Submission ID","type":"control_textbox"},null,{"name":"pageBreak","qid":"7","text":"Page Break","type":"control_pagebreak"},null,null,{"name":"deviceCheck","qid":"10","text":"Device Check Completion","type":"control_head"},{"name":"addDevice","qid":"11","text":"Add Device to Submission","type":"control_head"},null,{"description":"","name":"dateReceived13","qid":"13","text":"Date Received","type":"control_datetime"},{"description":"","name":"from","qid":"14","subLabel":"","text":"From:","type":"control_textbox"},{"description":"","name":"typeA15","qid":"15","subLabel":"","text":"To:","type":"control_textbox"},{"description":"","name":"deviceQuantity","qid":"16","subLabel":"","text":"Device Quantity","type":"control_textbox"},{"description":"","name":"indicateType","qid":"17","subLabel":"","text":"Indicate Type","type":"control_textbox"},{"description":"","name":"description","qid":"18","subLabel":"","text":"Description","type":"control_dropdown"},{"description":"","name":"manufacturer","qid":"19","subLabel":"","text":"Manufacturer","type":"control_dropdown"},{"description":"","name":"status","qid":"20","text":"Status","type":"control_radio"},{"description":"","name":"submittersEmail","qid":"21","subLabel":"example@example.com","text":"Submitter's Email","type":"control_email"},{"name":"pageBreak22","qid":"22","text":"Page Break","type":"control_pagebreak"},{"name":"removeDevice","qid":"23","text":"Remove Device from Submission","type":"control_head"},{"description":"","name":"submissionId24","qid":"24","subLabel":"","text":"Submission ID:","type":"control_textbox"},{"description":"","name":"submissionId25","qid":"25","subLabel":"","text":"Submission ID:","type":"control_textbox"},{"name":"searchFor","qid":"26","text":"Auto Complete Fields","type":"control_button"},{"description":"","name":"assetTag","qid":"27","subLabel":"","text":"Asset Tag:","type":"control_textbox"},{"description":"","name":"serialNumber","qid":"28","subLabel":"","text":"Serial Number","type":"control_textbox"},{"description":"","name":"assetTag29","qid":"29","subLabel":"","text":"Asset Tag","type":"control_textbox"},{"description":"","name":"removeBy","qid":"30","text":"Remove by:","type":"control_radio"},{"description":"","name":"serialNumber31","qid":"31","subLabel":"","text":"Serial Number","type":"control_textbox"},{"name":"removeDevice32","qid":"32","text":"Remove Device","type":"control_button"},null,{"description":"","name":"status34","qid":"34","subLabel":"","text":"Status","type":"control_dropdown"},{"name":"searchResults","qid":"35","text":"Search Results","type":"control_head"},{"description":"","name":"filterBy","qid":"36","subLabel":"","text":"Filter by the Asset Tag Number","type":"control_textbox"},{"name":"accessoryAdf","qid":"37","text":"Accessory ADF Results","type":"control_head"},{"name":"deviceAdf","qid":"38","text":"Device ADF Results","type":"control_head"},{"name":"searchFor39","qid":"39","text":"Search for Submission","type":"control_button"},{"name":"divider40","qid":"40","type":"control_divider"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"pageBreak59","qid":"59","text":"Page Break","type":"control_pagebreak"},{"name":"submitChecked","qid":"60","text":"Submit Checked Devices","type":"control_button"},{"name":"typeA","qid":"61","text":"","type":"control_widget"},null,null,null,{"name":"input65","qid":"65","text":"","type":"control_widget"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Device Asset Check-Off Form","type":"control_head"},{"name":"addDevice2","qid":"2","text":"Add Device","type":"control_button"},{"description":"","name":"selectThe","qid":"3","text":"Select the Action Below:","type":"control_radio"},{"description":"","name":"dateChecked","qid":"4","text":"Date Checked","type":"control_datetime"},{"description":"","name":"submissionId","qid":"5","subLabel":"","text":"Submission ID","type":"control_textbox"},null,{"name":"pageBreak","qid":"7","text":"Page Break","type":"control_pagebreak"},null,null,{"name":"deviceCheck","qid":"10","text":"Device Check Completion","type":"control_head"},{"name":"addDevice","qid":"11","text":"Add Device to Submission","type":"control_head"},null,{"description":"","name":"dateReceived13","qid":"13","text":"Date Received","type":"control_datetime"},{"description":"","name":"from","qid":"14","subLabel":"","text":"From:","type":"control_textbox"},{"description":"","name":"typeA15","qid":"15","subLabel":"","text":"To:","type":"control_textbox"},{"description":"","name":"deviceQuantity","qid":"16","subLabel":"","text":"Device Quantity","type":"control_textbox"},{"description":"","name":"indicateType","qid":"17","subLabel":"","text":"Indicate Type","type":"control_textbox"},{"description":"","name":"description","qid":"18","subLabel":"","text":"Description","type":"control_dropdown"},{"description":"","name":"manufacturer","qid":"19","subLabel":"","text":"Manufacturer","type":"control_dropdown"},{"description":"","name":"status","qid":"20","text":"Status","type":"control_radio"},{"description":"","name":"submittersEmail","qid":"21","subLabel":"example@example.com","text":"Submitter's Email","type":"control_email"},{"name":"pageBreak22","qid":"22","text":"Page Break","type":"control_pagebreak"},{"name":"removeDevice","qid":"23","text":"Remove Device from Submission","type":"control_head"},{"description":"","name":"submissionId24","qid":"24","subLabel":"","text":"Submission ID:","type":"control_textbox"},{"description":"","name":"submissionId25","qid":"25","subLabel":"","text":"Submission ID:","type":"control_textbox"},{"name":"searchFor","qid":"26","text":"Auto Complete Fields","type":"control_button"},{"description":"","name":"assetTag","qid":"27","subLabel":"","text":"Asset Tag:","type":"control_textbox"},{"description":"","name":"serialNumber","qid":"28","subLabel":"","text":"Serial Number","type":"control_textbox"},{"description":"","name":"assetTag29","qid":"29","subLabel":"","text":"Asset Tag","type":"control_textbox"},{"description":"","name":"removeBy","qid":"30","text":"Remove by:","type":"control_radio"},{"description":"","name":"serialNumber31","qid":"31","subLabel":"","text":"Serial Number","type":"control_textbox"},{"name":"removeDevice32","qid":"32","text":"Remove Device","type":"control_button"},null,{"description":"","name":"status34","qid":"34","subLabel":"","text":"Status","type":"control_dropdown"},{"name":"searchResults","qid":"35","text":"Search Results","type":"control_head"},{"description":"","name":"filterBy","qid":"36","subLabel":"","text":"Filter by the Asset Tag Number","type":"control_textbox"},{"name":"accessoryAdf","qid":"37","text":"Accessory ADF Results","type":"control_head"},{"name":"deviceAdf","qid":"38","text":"Device ADF Results","type":"control_head"},{"name":"searchFor39","qid":"39","text":"Search for Submission","type":"control_button"},{"name":"divider40","qid":"40","type":"control_divider"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"pageBreak59","qid":"59","text":"Page Break","type":"control_pagebreak"},{"name":"submitChecked","qid":"60","text":"Submit Checked Devices","type":"control_button"},{"name":"typeA","qid":"61","text":"","type":"control_widget"},null,null,null,{"name":"input65","qid":"65","text":"","type":"control_widget"}]);}, 20); 
</script>



<!--Beginning of my code-->



<script>

// prevents resubmissions

    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
} 
    
// This calculates the date

function autoDate () {
	var tDay = new Date();
	var tMonth = tDay.getMonth()+1;
	var tDate = tDay.getDate();
	if ( tMonth < 10) tMonth = "0"+tMonth;
	if ( tDate < 10) tDate = "0"+tDate;
	document.getElementById("todaysDate").value = tMonth+"/"+tDate+"/"+tDay.getFullYear();
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




<style> 

/*Search Elements */
.searchTable{
  display: block;
  overflow: scroll;
  height: 500px;
  overflow-y: scroll;
    
}
.searchTable, .searchHeading{
    border: 1px solid #333;
    
    border-collapse: collapse;
    
    
}

.searchData{
    border: 1px solid #333;
    
    border-collapse: collapse;
}
th {
  background: white;
  position: sticky;
  top: 0;
}



/*Navigation Bar*/


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: blue;
  color: white;
}


/*End of Navigation Bar */

</style>


    <script>
function searchBar() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}






</script>

    <script>
function searchBar1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}






</script>


<script>
    
    function selectFilter1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myList1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<script>
    
    function selectFilter() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myList2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<script>
    
    function selectFilter1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myList3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<style>
.searchBox{
width: 50%;


}

.searchBox1{
width: 70%;


}


#cid_38{
    background-color:#D3D3D3;
    border: solid 1px;
}
</style>



<!--End of my code-->

</head>
<body>
    
  
    
<form class="jotform-form" action="Device_Asset_Check-Off_Form.php" method="post" name="form_221785284238059" id="221785284238059" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="221785284238059" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <div class="formLogoWrapper Center">
      <img loading="lazy" class="formLogoImg" src="https://www.jotform.com/uploads/coxw1/form_files/MSCS-Logo-Reverse-White-Transparent-Bkg.6298d6fa7763b8.61777119.png" height="140" width="165">
    </div>
    <style>
      .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Center { top: -150px; text-align: center;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Right">
            <div class="header-text httal htvam">
              <h1 id="header_1" class="form-header" data-component="header">
                Device Asset Check-Off Form
              </h1>
            </div>
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/coxw1/form_files/checkoff-darker.62bb2efb2bcaa3.21688138.png" alt="" width="100" class="header-logo-right" />
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3"> Select the Action Below: </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_3" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              
             
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_0" name="q3_selectThe" value="Device Check Completion" />
              <label id="label_input_3_0" for="input_3_0"> Device Check Completion </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_1" name="q3_selectThe" value="Add Device" />
              <label id="label_input_3_1" for="input_3_1"> Add Device </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_2" name="q3_selectThe" value="Remove Device" />
              <label id="label_input_3_2" for="input_3_2"> Remove Device </label>
            </span>
          </div>
        </div>
      </li>
      
     
      <li id="cid_7" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container">
            <button id="form-pagebreak-back_7" type="button" class="form-pagebreak-back  jf-form-buttons" data-component="pagebreak-back">
              Back
            </button>
          </div>
          <div class="form-pagebreak-next-container">
            <button id="form-pagebreak-next_7" type="button" class="form-pagebreak-next  jf-form-buttons" data-component="pagebreak-next">
              Next
            </button>
          </div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_7">
          </div>
        </div>
      </li>
      
       <li>
          <?php 
          
           if($btnName = 'checked' ){
     
    echo" <h3> Refresh your screen to see checked devices. </h3> ";
     
    
     
 }
          
          ?>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li id="cid_10" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-default" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/coxw1/form_files/approval denial.6298e6c350ed16.92082129.png" alt="" width="100" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h2 id="header_10" class="form-header" data-component="header">
                Device Check Completion
              </h2>
              <div id="subHeader_10" class="form-subHeader">
                Enter the Submission ID to verify that all devices have been checked.
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line fixed-width form-line-column form-col-1 form-line-column-clear jf-required" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
          Submission ID
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required" data-layout="half">
          <input type="text" name="q5_submissionId" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:150px" size="150" value="" data-component="textbox" aria-labelledby="label_5" required="" />
        </div>
      </li>
   
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_datetime" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="lite_mode_4">
          Date Checked
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" readonly="" class="form-textbox validate[required, limitDate]" id="year_4" name="q4_dateChecked" size="4" data-maxlength="4" data-age="" maxLength="4" value="2022" required="" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_year" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="year_4" id="sublabel_4_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" readonly="" class="form-textbox validate[required, limitDate]" id="month_4" name="q4_dateChecked[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="06" required="" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_4" id="sublabel_4_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" readonly="" class="currentDate form-textbox validate[required, limitDate]" id="day_4" name="q4_dateChecked[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="30" required="" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_day" />
                <label class="form-sub-label" for="day_4" id="sublabel_4_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[required]" id="todaysDate" name="todaysDate" size="12" data-maxlength="12" maxLength="12" data-age="" value="" readonly="" required="" aria-labelledby="label_4" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_4_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label is-empty" for="lite_mode_4" id="sublabel_4_litemode" style="min-height:13px" aria-hidden="false">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_60">
        <div id="cid_60" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_60" name = "action" value = "checked" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit Checked Devices
            </button>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_divider" id="id_40">
        <div id="cid_40" class="form-input-wide" data-layout="full">
          <div class="divider" aria-label="Divider" data-component="divider" style="border-bottom-width:2px;border-bottom-style:solid;border-color:#000000;height:2px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
          </div>
        </div>
      </li>
      <li id="cid_35" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_35" class="form-header" data-component="header">
              Search Results
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_36">
        <label class="form-label form-label-top form-label-auto" id="label_36" for="input_36"> Filter by the Asset Tag Number </label>
        <div id="cid_36" class="form-input-wide" data-layout="half">
          <input type="text" id="myInput1" name="q36_filterBy" onkeyup="searchBar1()" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Search by the Asset Tag Number..." data-component="textbox" aria-labelledby="label_36" />
        </div>
      </li>
      
      <!--
      <li id="cid_37" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_37" class="form-header" data-component="header">
              Accessory ADF Results
            </h2>
          </div>
        </div>
      </li>
      
      -->
      
  
      <li id="cid_38" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_38" class="form-header" data-component="header">
              Device ADF Results
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_widget" id="id_61">
        <label class="form-label form-label-top form-label-auto" id="label_61" for="input_61">  </label>
        <div id="cid_61" class="form-input-wide" data-layout="full">
     
  
            
            
          
               
            

  
  <script>
$(document).ready(function() {

   function RefreshTable() {
       $( "#mytable" ).load( "http://velgoodies.com/ADF_Device_Check/Device_Asset_Check-Off_Form.php #mytable" );
   }

   $("#refresh-btn").on("click", RefreshTable);

   // OR CAN THIS WAY
   //
   // $("#refresh-btn").on("click", function() {
   //    $( "#mytable" ).load( "your-current-page.html #mytable" );
   // });


});
</script>
            <button id="refresh-btn">Refresh Table</button>   
       <table class ='searchTable' id ='myTable' width =100% border = 1px text-align=center>

 <colgroup>      
      

 <col width =100px>
 <col width =150px>
 <col >
 <col >
 <col >
 <col >
 <col >
 <col >
 <col >
 <col  >
 <col >
 <col >

 </colgroup>

 <tr>  
 


<th class = 'searchHeading'>
Date 
</th>

 <th class = 'searchHeading'>
Submission ID 
</th>

 <th class = 'searchHeading'>
From School/Department 
</th>

 <th class = 'searchHeading'>
To School/Department
</th>

 <th class = 'searchHeading'>
Quantity
</th>

 <th class = 'searchHeading'>
Description
</th>

<th class = 'searchHeading'>
PSID
</th>

 <th class = 'searchHeading'>
Serial Number
</th>

 <th class = 'searchHeading'>
Asset Tag
</th>




 <th class = 'searchHeading'>
Status
</th>

 <th   class = 'searchHeading' style = "background-color: #90EE90";>
Device Present
</th>

 <th  class = 'searchHeading' >
Completion
</th>

 </tr>


   <?php
   
  
   

      



   
while ($row = mysqli_fetch_assoc($result)){
    
    
//while loop value names
$id_1 = $row['formId'];
$date_1 = $row['tDate'];
$submissionId_1 = $row['SubmissionId'];
$from_1 = $row['fromDivision'];
$to_1 = $row['toDivision'];
$qty_1 = $row['quantity'];
$description_1 =  $row['description'];
$psid_1 = $row['psid'] ;
$serial_1 =  $row['serialNum'];
$asset_1 = $row['assetTag'];
$add_remove_1 = $row['acqDate'] ;
$completion_1 = $row['Completion'];
$checkBoxValue = $_POST["$id_1"];
  
    
   
   ?>

 <tr >

<td class='searchData'> <?php echo " $date_1";   ?></td>
<td class='searchData'> <?php echo "$submissionId_1 ";   ?></td>
<td class='searchData'> <?php echo "$from_1 ";   ?></td>
<td class='searchData'> <?php echo "$to_1 ";   ?></td>
<td class='searchData'> <?php echo "$qty_1 ";   ?></td>
<td class='searchData'> <?php echo "$description_1 ";   ?></td>
<td class='searchData'> <?php echo " $psid_1";   ?></td>
<td class='searchData'> <?php echo "$serial_1 ";   ?></td>
<td class='searchData'> <?php echo "$asset_1 ";   ?></td>
<td class='searchData'> <?php echo "$add_remove_1";   ?></td>
<td class='searchData'><center> <input type = 'checkbox' name = '<?= $id_1 ?>' value ='<?= $id_1 ?>' ></center></td>
<td class='searchData'> <?php echo "$completion_1 ";   ?></td>

 </tr>

<?php


 if($btnName = 'checked' ){
     
    
     
      $stmt = $conn->prepare ("UPDATE `Asset Disposition Form` SET `Completion`= 'Checked', `tDate` = '$todaysDate' WHERE `SubmissionId` = '$submissionId' AND `formId` = '$checkBoxValue' ");
      $stmt-> execute();
      
    $stmt-> close();
     
 }


}//end of while loop




?>
   </table>
   
   
   
 
 

<?php









 $result-> close();
 

 
 
   $conn-> close();

}//end of initial else bracket


?>

     
     
     
       
        </div>
      </li>
      <li id="cid_59" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak" data-component="pagebreak">
          <div class="form-pagebreak-back-container">
            <button id="form-pagebreak-back_59" type="button" class="form-pagebreak-back  jf-form-buttons" data-component="pagebreak-back">
              Back
            </button>
          </div>
          <div class="form-pagebreak-next-container">
            <button id="form-pagebreak-next_59" type="button" class="form-pagebreak-next  button-hidden jf-form-buttons" data-component="pagebreak-next">
              Next
            </button>
          </div>
          <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_59">
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li id="cid_11" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-default" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/coxw1/form_files/add.62bb5c301d3df3.44498737.png" alt="" width="75" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h2 id="header_11" class="form-header" data-component="header">
                Add Device to Submission
              </h2>
              <div id="subHeader_11" class="form-subHeader">
                Add an additional device to a current submission.
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_25">
        <label class="form-label form-label-top" id="label_25" for="input_25">
          Submission ID:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_25" name="q25_submissionId25" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_25" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_button" id="id_26">
        <div id="cid_26" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_26" type="submit" class="form-submit-button form-submit-button-cool_grey_rounded submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Auto Complete Fields
            </button>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21">
          Submitter's Email
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_21" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_21" name="q21_submittersEmail" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_21 sublabel_input_21" required="" />
            <label class="form-sub-label" for="input_21" id="sublabel_input_21" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 form-line-column-clear jf-required" data-type="control_datetime" id="id_13">
        <label class="form-label form-label-top" id="label_13" for="lite_mode_13">
          Date Received
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_13" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" readonly="" class="form-textbox validate[required, limitDate]" id="year_13" name="q13_dateReceived13[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2022" required="" autoComplete="section-input_13 off" aria-labelledby="label_13 sublabel_13_year" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="year_13" id="sublabel_13_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" readonly="" class="form-textbox validate[required, limitDate]" id="month_13" name="q13_dateReceived13[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="06" required="" autoComplete="section-input_13 off" aria-labelledby="label_13 sublabel_13_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_13" id="sublabel_13_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" readonly="" class="currentDate form-textbox validate[required, limitDate]" id="day_13" name="q13_dateReceived13[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="30" required="" autoComplete="section-input_13 off" aria-labelledby="label_13 sublabel_13_day" />
                <label class="form-sub-label" for="day_13" id="sublabel_13_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_13" size="12" data-maxlength="12" maxLength="12" data-age="" value="2022-06-30" readonly="" required="" data-format="yyyymmdd" data-seperator="-" placeholder="YYYY-MM-DD" autoComplete="section-input_13 off" aria-labelledby="label_13" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_13_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label is-empty" for="lite_mode_13" id="sublabel_13_litemode" style="min-height:13px" aria-hidden="false">  </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14">
          From:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_14" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_14" name="q14_from" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:294px" size="294" value="" data-component="textbox" aria-labelledby="label_14" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15">
          To:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_15" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_15" name="q15_typeA15" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_15" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-4 jf-required" data-type="control_textbox" id="id_27">
        <label class="form-label form-label-top" id="label_27" for="input_27">
          Asset Tag:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_27" name="q27_assetTag" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_27" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-5 jf-required" data-type="control_textbox" id="id_28">
        <label class="form-label form-label-top" id="label_28" for="input_28">
          Serial Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_28" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_28" name="q28_serialNumber" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_28" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-6 jf-required" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top" id="label_16" for="input_16">
          Device Quantity
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_16" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_16" name="q16_deviceQuantity" data-type="input-textbox" class="form-readonly form-textbox validate[required]" data-defaultvalue="1" style="width:310px" size="310" value="1" tabindex="-1" data-component="textbox" aria-labelledby="label_16" readonly="" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-7 jf-required" data-type="control_textbox" id="id_17">
        <label class="form-label form-label-top" id="label_17" for="input_17">
          Indicate Type
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_17" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_17" name="q17_indicateType" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_17" required="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-8 jf-required" data-type="control_dropdown" id="id_18">
        <label class="form-label form-label-top" id="label_18" for="input_18">
          Description
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_18" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_18" name="q18_description" style="width:310px" data-component="dropdown" required="">
            <option value=""> Please Select </option>
            <option value="SurfaceGo Tablet"> SurfaceGo Tablet </option>
            <option value="Think Pad 11e"> Think Pad 11e </option>
            <option value="HP Laptop"> HP Laptop </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-9 jf-required" data-type="control_dropdown" id="id_19">
        <label class="form-label form-label-top" id="label_19" for="input_19">
          Manufacturer
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_19" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_19" name="q19_manufacturer" style="width:310px" data-component="dropdown" required="">
            <option value=""> Please Select </option>
            <option value="Microsoft"> Microsoft </option>
            <option value="Lenovo"> Lenovo </option>
            <option value="HP"> HP </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column form-col-10 jf-required" data-type="control_radio" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20">
          Status
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_20" class="form-radio validate[required]" id="input_20_0" name="q20_status" value="Add Device to Submission" required="" />
              <label id="label_input_20_0" for="input_20_0"> Add Device to Submission </label>
            </span>
          </div>
        </div>
      </li>
      <li id="cid_2" class="form-input-wide" data-type="control_button">
        <div data-align="auto" class="form-buttons-wrapper form-buttons-auto  form-pagebreak jsTest-button-wrapperField">
          <div class="form-pagebreak-back-container">
            <button id="form-pagebreak-back_22" type="button" class="form-pagebreak-back  jf-form-buttons" data-component="pagebreak-back">
              Back
            </button>
          </div>
          <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
            Add Device
          </button>
          <div class="form-pagebreak-next-container">
            <button id="form-pagebreak-next_22" type="button" class="form-pagebreak-next  button-hidden jf-form-buttons" data-component="pagebreak-next">
              Next
            </button>
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li id="cid_23" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-default" data-imagealign="Left">
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/coxw1/form_files/-clipart-minus-minus.62bb5cd4090635.43809979.png" alt="" width="75" class="header-logo-left" />
            </div>
            <div class="header-text httal htvam">
              <h2 id="header_23" class="form-header" data-component="header">
                Remove Device from Submission
              </h2>
              <div id="subHeader_23" class="form-subHeader">
                Remove a device from a current submission.
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_24">
        <label class="form-label form-label-top form-label-auto" id="label_24" for="input_24">
          Submission ID:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_24" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_24" name="q24_submissionId24" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_24" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_30">
        <label class="form-label form-label-top form-label-auto" id="label_30" for="input_30">
          Remove by:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_30" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_30" class="form-radio validate[required]" id="input_30_0" name="q30_removeBy" value="Asset Tag" required="" />
              <label id="label_input_30_0" for="input_30_0"> Asset Tag </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_30" class="form-radio validate[required]" id="input_30_1" name="q30_removeBy" value="Serial Number" required="" />
              <label id="label_input_30_1" for="input_30_1"> Serial Number </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_textbox" id="id_29">
        <label class="form-label form-label-top form-label-auto" id="label_29" for="input_29">
          Asset Tag
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_29" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_29" name="q29_assetTag29" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_29" required="" />
        </div>
      </li>
      <li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_textbox" id="id_31">
        <label class="form-label form-label-top form-label-auto" id="label_31" for="input_31">
          Serial Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_31" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_31" name="q31_serialNumber31" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_31" required="" />
        </div>
      </li>
      <li class="form-line jf-required form-field-hidden" style="display:none;" data-type="control_dropdown" id="id_34">
        <label class="form-label form-label-top form-label-auto" id="label_34" for="input_34">
          Status
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_34" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_34" name="q34_status34" style="width:310px" data-component="dropdown" required="">
            <option value=""> Please Select </option>
            <option value="Remove"> Remove </option>
            <option value="Undo Remove"> Undo Remove </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_32">
        <div id="cid_32" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_32" type="submit" class="form-submit-button form-submit-button-push_red submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Remove Device
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="221785284238059" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='221785284238059'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "221785284238059-221785284238059";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6 branding21">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=221785284238059&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a>
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own Jotform - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=221785284238059&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a>
    </div>
  </div>
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.34379"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.34379"></script>
