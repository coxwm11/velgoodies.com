<!DOCTYPE html>

<head><meta charset="utf-8">

	<title>ADF Corrections Form</title>
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

 

  <!--Form to echo search results-->  
  <form action="ADF_Corrections.php" id="adf" method="POST" name="adf" onsubmit="checkForm()"  required="">
      
        <h3><b>Search Database</b></h3>
<div style="height:400x;overflow:auto;">
    
    <h4  ><span style= "background-color: yellow;">Note|| Search for the device using either the Submission ID <b>or</b> Asset Tag. Do not use more than one search field.</span></h4>
<div class="row">





<!--Entry Below-->




<div class="col-md-3 col-xs-3">Submission ID: <input id="submissionId" name="submissionId"  type="text" /></div>

<div class="col-md-3 col-xs-3">Asset Tag: <input id="assetTag" name="assetTag"  type="text" /></div>





</div>
</div>




<br />
<input name="submit" type="submit" value="Search Results" /></form>


    <br>

    
    
    <!--Form for  deleting devices-->


<form action="ChangeSchoolName.php" id="changeSchoolName" method="POST" name="changeSchoolName" onsubmit="checkForm()"  required="">
    
   
    
    
    <h3><b>Change School Name</b></h3>
    


<br>
    <div class = "row">
    



   <div class="col-md-3 col-xs-3">
        
       Submission ID: <input id="submissionId" name="submissionId" type="text" required=""  />
        
        
        </div>
        
      

</div> <!--end of row-->
    
 
    
    <div class="row">

<div class="col-md-6 col-xs-6">
<h5>To: <select id="toDivision" name="toDivision" required="">
    <option value=""></option>
    <option value="Virtual Education and Logistics Center   LOC: 2385    -   Route 3">Virtual Education and Logistics Center LOC: 2385    -   Route 3</option>
<option value="A. B. Hill Elem    LOC: 2005   -   Route 4">A. B. Hill Elem    LOC: 2005   -   Route 4</option>
<option value="A. Maceo Walker Middle    LOC: 2740   -   Route 3">A. Maceo Walker Middle    LOC: 2740   -   Route 3</option>
<option value="Adolescent Parenting    LOC: 2824   -   Route 2">Adolescent Parenting    LOC: 2824   -   Route 2</option>
<option value="Airways Achievement    LOC: 2010   -   Route 3">Airways Achievement    LOC: 2010   -   Route 3</option>
<option value="Alcy Elem    LOC: 2015   -   Route 4">Alcy Elem    LOC: 2015   -   Route 4</option>
<option value="Alton Elem    LOC: 2020   -   Route 4">Alton Elem    LOC: 2020   -   Route 4</option>
<option value="American Way Middle    LOC: 2023   -   Route 3">American Way Middle    LOC: 2023   -   Route 3</option>
<option value="Avon Lenox School    LOC: 2025   -   Route 1">Avon Lenox School    LOC: 2025   -   Route 1</option>
<option value="Balmoral/Ridgeway Elem    LOC: 2610   -   Route 3">Balmoral/Ridgeway Elem    LOC: 2610   -   Route 3</option>
<option value="Barret’s Chapel Middle    LOC: 10   -   Route 5">Barret’s Chapel Middle    LOC: 10   -   Route 5</option>
<option value="Belle Forest Elem    LOC: 8365   -   Route 3">Belle Forest Elem    LOC: 8365   -   Route 3</option>
<option value="Bellevue Middle    LOC: 2040   -   Route 2">Bellevue Middle    LOC: 2040   -   Route 2</option>
<option value="Berclair Elem    LOC: 2045   -   Route 1">Berclair Elem    LOC: 2045   -   Route 1</option>
<option value="Bethel Grove Elem    LOC: 2050   -   Route 2">Bethel Grove Elem    LOC: 2050   -   Route 2</option>
<option value="Bolton High    LOC: 35   -   Route 5">Bolton High    LOC: 35   -   Route 5</option>
<option value="Booker T. Washington High    LOC: 2030   -   Route 4">Booker T. Washington High    LOC: 2030   -   Route 4</option>
<option value="Brownville Rd. Elem    LOC: 2057   -   Route 1">Brownville Rd. Elem    LOC: 2057   -   Route 1</option>
<option value="Bruce Elem    LOC: 2060   -   Route 2">Bruce Elem    LOC: 2060   -   Route 2</option>
<option value="Carver College & Career Academy    LOC: 8066   -   Route 4">Carver College & Career Academy    LOC: 8066   -   Route 4</option>
<option value="Central High    LOC: 2090   -   Route 2">Central High    LOC: 2090   -   Route 2</option>
<option value="Cherokee Elem    LOC: 2100   -   Route 3">Cherokee Elem    LOC: 2100   -   Route 3</option>
<option value="Chickasaw Middle    LOC: 2108   -   Route 4">Chickasaw Middle    LOC: 2108   -   Route 4</option>
<option value="Chimneyrock Elem    LOC: 2049   -   Route 5">Chimneyrock Elem    LOC: 2049   -   Route 5</option>
<option value="Colonial Middle    LOC: 2115   -   Route 2">Colonial Middle    LOC: 2115   -   Route 2</option>
<option value="Cordova Elem    LOC: 2117   -   Route 5">Cordova Elem    LOC: 2117   -   Route 5</option>
<option value="Cordova High    LOC: 2119   -   Route 5">Cordova High    LOC: 2119   -   Route 5</option>
<option value="Cordova Middle    LOC: 2118   -   Route 5">Cordova Middle    LOC: 2118   -   Route 5</option>
<option value="Craigmont High    LOC: 2126   -   Route 1">Craigmont High    LOC: 2126   -   Route 1</option>
<option value="Craigmont Middle    LOC: 2128   -   Route 1">Craigmont Middle    LOC: 2128   -   Route 1</option>
<option value="Cromwell Elem    LOC: 2130   -   Route 3">Cromwell Elem    LOC: 2130   -   Route 3</option>
<option value="Crump Elem    LOC: 2133   -   Route 3">Crump Elem    LOC: 2133   -   Route 3</option>
<option value="Cummings School    LOC: 2135   -   Route 4">Cummings School    LOC: 2135   -   Route 4</option>
<option value="Delano Elem    LOC: 2145   -   Route 1">Delano Elem    LOC: 2145   -   Route 1</option>
<option value="Dexter Elem    LOC: 67   -   Route 5">Dexter Elem    LOC: 67   -   Route 5</option>
<option value="Dexter Middle    LOC: 68   -   Route 5">Dexter Middle    LOC: 68   -   Route 5</option>
<option value="Double Tree Elem    LOC: 2153   -   Route 4">Double Tree Elem    LOC: 2153   -   Route 4</option>
<option value="Douglass Elem/Middle    LOC: 2155   -   Route 2">Douglass Elem/Middle    LOC: 2155   -   Route 2</option>
<option value="Douglass High    LOC: 2160   -   Route 2">Douglass High    LOC: 2160   -   Route 2</option>
<option value="Downtown Elem    LOC: 2162   -   Route 4">Downtown Elem    LOC: 2162   -   Route 4</option>
<option value="Dunbar Elem    LOC: 2165   -   Route 2">Dunbar Elem    LOC: 2165   -   Route 2</option>
<option value="E. E. Jeter Elem    LOC: 80   -   Route 5">E. E. Jeter Elem    LOC: 80   -   Route 5</option>
<option value="East High    LOC: 2180   -   Route 2">East High    LOC: 2180   -   Route 2</option>
<option value="Egypt Elem    LOC: 2183   -   Route 1">Egypt Elem    LOC: 2183   -   Route 1</option>
<option value="Evans Elem    LOC: 2185   -   Route 3">Evans Elem    LOC: 2185   -   Route 3</option>
<option value="Ford Rd. Elem    LOC: 2210   -   Route 4">Ford Rd. Elem    LOC: 2210   -   Route 4</option>
<option value="Fox Meadows Elem    LOC: 2215   -   Route 3">Fox Meadows Elem    LOC: 2215   -   Route 3</option>
<option value="Gardenview Elem    LOC: 2230   -   Route 3">Gardenview Elem    LOC: 2230   -   Route 3</option>
<option value="Geeter Middle    LOC: 2240   -   Route 4">Geeter Middle    LOC: 2240   -   Route 4</option>
<option value="Georgian Hills Middle    LOC: 2255   -   Route 1">Georgian Hills Middle    LOC: 2255   -   Route 1</option>
<option value="Germanshire Elem    LOC: 2258   -   Route 3">Germanshire Elem    LOC: 2258   -   Route 3</option>
<option value="Germantown Elem    LOC: 105   -   Route 5">Germantown Elem    LOC: 105   -   Route 5</option>
<option value="Germantown High    LOC: 110   -   Route 5">Germantown High    LOC: 110   -   Route 5</option>
<option value="Germantown Middle    LOC: 107   -   Route 5">Germantown Middle    LOC: 107   -   Route 5</option>
<option value="Getwell Elem    LOC: 2259   -   Route 3">Getwell Elem    LOC: 2259   -   Route 3</option>
<option value="Gordon Success Academy    LOC: 2265   -   Route 2">Gordon Success Academy    LOC: 2265   -   Route 2</option>
<option value="Grahamwood Elem    LOC: 2285   -   Route 1">Grahamwood Elem    LOC: 2285   -   Route 1</option>
<option value="Grandview Heights Middle    LOC: 2835   -   Route 1">Grandview Heights Middle    LOC: 2835   -   Route 1</option>
<option value="Hamilton High    LOC: 2317   -   Route 4">Hamilton High    LOC: 2317   -   Route 4</option>
<option value="Hamilton K-8    LOC: 2315   -   Route 4">Hamilton K-8    LOC: 2315   -   Route 4</option>
<option value="Hawkins Mill Elem    LOC: 2330   -   Route 1">Hawkins Mill Elem    LOC: 2330   -   Route 1</option>
<option value="Havenview Middle    LOC: 2325   -   Route 4">Havenview Middle    LOC: 2325   -   Route 4</option>
<option value="Hickory Ridge Elem    LOC: 2331   -   Route 3">Hickory Ridge Elem    LOC: 2331   -   Route 3</option>
<option value="Hickory Ridge Middle    LOC: 2333   -   Route 3">Hickory Ridge Middle    LOC: 2333   -   Route 3</option>
<option value="Highland Oaks Elem    LOC: 108   -   Route 3">Highland Oaks Elem    LOC: 108   -   Route 3</option>
<option value="Highland Oaks Middle    LOC: 200   -   Route 3">Highland Oaks Middle    LOC: 200   -   Route 3</option>
<option value="Hollis F. Price Middle College High    LOC: 2338   -   Route 4">Hollis F. Price Middle College High    LOC: 2338   -   Route 4</option>
<option value="Holmes Rd. Elem    LOC: 2343   -   Route 4">Holmes Rd. Elem    LOC: 2343   -   Route 4</option>
<option value="Ida B Wells    LOC: 2353   -   Route 2">Ida B Wells    LOC: 2353   -   Route 2</option>
<option value="Idlewild Elem    LOC: 2355   -   Route 2">Idlewild Elem    LOC: 2355   -   Route 2</option>
<option value="Jackson Elem    LOC: 2360   -   Route 1">Jackson Elem    LOC: 2360   -   Route 1</option>
<option value="John P. Freeman School    LOC: 2362   -   Route 4">John P. Freeman School    LOC: 2362   -   Route 4</option>
<option value="Kate Bond Elem    LOC: 2116   -   Route 5">Kate Bond Elem    LOC: 2116   -   Route 5</option>
<option value="Kate Bond Middle    LOC: 2007   -   Route 5">Kate Bond Middle    LOC: 2007   -   Route 5</option>
<option value="Keystone Elem    LOC: 2368   -   Route 1">Keystone Elem    LOC: 2368   -   Route 1</option>
<option value="Kingsbury Elem    LOC: 2370   -   Route 1">Kingsbury Elem    LOC: 2370   -   Route 1</option>
<option value="Kingsbury High    LOC: 2375   -   Route 1">Kingsbury High    LOC: 2375   -   Route 1</option>
<option value="Kingsbury Middle    LOC: 2373   -   Route 1">Kingsbury Middle    LOC: 2373   -   Route 1</option>
<option value="Kirby High    LOC: 2379   -   Route 3">Kirby High    LOC: 2379   -   Route 3</option>
<option value="Kirby Middle    LOC: 2378   -   Route 3">Kirby Middle    LOC: 2378   -   Route 3</option>
<option value="Knight Rd. Elem    LOC: 2385   -   Route 3">Knight Rd. Elem    LOC: 2385   -   Route 3</option>
<option value="LaRose Elem    LOC: 2395   -   Route 2">LaRose Elem    LOC: 2395   -   Route 2</option>
<option value="Levi Elem    LOC: 2435   -   Route 4">Levi Elem    LOC: 2435   -   Route 4</option>
<option value="Lowrance Elem    LOC: 205   -   Route 3">Lowrance Elem    LOC: 205   -   Route 3</option>
<option value="Lucie E. Campbell Elem    LOC: 2463   -   Route 1">Lucie E. Campbell Elem    LOC: 2463   -   Route 1</option>
<option value="Lucy Elem    LOC: 115   -   Route 5">Lucy Elem    LOC: 115   -   Route 5</option>
<option value="Macon-Hall Elem    LOC: 118   -   Route 5">Macon-Hall Elem    LOC: 118   -   Route 5</option>
<option value="Magnolia Elem    LOC: 2470   -   Route 2">Magnolia Elem    LOC: 2470   -   Route 2</option>
<option value="Manassas High    LOC: 2480   -   Route 2">Manassas High    LOC: 2480   -   Route 2</option>
<option value="Maxine Smith STEM Academy    LOC: 2200   -   Route 2">Maxine Smith STEM Academy    LOC: 2200   -   Route 2</option>

<option value="Medical District    LOC: 0019   -   Route 4">Medical District    LOC: 0019   -   Route 4</option>

<option value="Melrose High    LOC: 2493   -   Route 2">Melrose High    LOC: 2493   -   Route 2</option>

<option value="Memphis Virtual Schools    LOC: 2010   -   Route 3">Memphis Virtual Schools    LOC: 2010   -   Route 3</option>
<option value="Middle College High    LOC: 2515   -   Route 2">Middle College High    LOC: 2515   -   Route 2</option>
<option value="Mitchell High    LOC: 2520   -   Route 4">Mitchell High    LOC: 2520   -   Route 4</option>
<option value="Mt. Pisgah Middle    LOC: 140   -   Route 5">Mt. Pisgah Middle    LOC: 140   -   Route 5</option>
<option value="Newberry Elem    LOC: 2525   -   Route 3">Newberry Elem    LOC: 2525   -   Route 3</option>

<option value="New Comers International Center    LOC: 2815   -   Route 3">New Comers International Center    LOC: 2815   -   Route 3</option>

<option value="Northaven Elem   LOC: 0145   -   Route 5">Northaven Elem    LOC: 0145   -   Route 5</option>
<option value="Northeast Prep School    LOC: 2822   -   Route 1">Northeast Prep School    LOC: 2822   -   Route 1</option>
<option value="Northwest Prep    LOC: 2824   -   Route 2">Northwest Prep    LOC: 2824   -   Route 2</option>
<option value="Oak Forest Elem    LOC: 2692   -   Route 3">Oak Forest Elem    LOC: 2692   -   Route 3</option>
<option value="Oakhaven Elem    LOC: 2540   -   Route 3">Oakhaven Elem    LOC: 2540   -   Route 3</option>
<option value="Oakhaven High    LOC: 2545   -   Route 3">Oakhaven High    LOC: 2545   -   Route 3</option>
<option value="Oakhaven Middle    LOC: 2543   -   Route 3">Oakhaven Middle    LOC: 2543   -   Route 3</option>
<option value="Oakshire Elem    LOC: 2550   -   Route 4">Oakshire Elem    LOC: 2550   -   Route 4</option>
<option value="Overton High    LOC: 2565   -   Route 3">Overton High    LOC: 2565   -   Route 3</option>
<option value="Parkway Village Elem    LOC: 2261   -   Route3">Parkway Village Elem    LOC: 2261   -   Route 3</option>
<option value="Peabody Elem    LOC: 2570   -   Route 2">Peabody Elem    LOC: 2570   -   Route 2</option>
<option value="Raleigh Egypt High    LOC: 2598   -   Route 1">Raleigh Egypt High    LOC: 2598   -   Route 1</option>
<option value="Raleigh Egypt Middle    LOC: 2596   -   Route 1">Raleigh Egypt Middle    LOC: 2596   -   Route 1</option>
<option value="Raleigh-Bartlett Meadows Elem    LOC: 2597   -   Route 1">Raleigh-Bartlett Meadows Elem    LOC: 2597   -   Route 1</option>
<option value="Richland Elem    LOC: 2600   -   Route 1">Richland Elem    LOC: 2600   -   Route 1</option>
<option value="Ridgeway Early Learning Ctr.    LOC: 7214   -   Route 3">Ridgeway Early Learning Ctr.    LOC: 7214   -   Route 3</option>
<option value="Ridgeway High    LOC: 2615   -   Route 2">Ridgeway High    LOC: 2615   -   Route 2</option>
<option value="Ridgeway Middle    LOC: 2612   -   Route 2">Ridgeway Middle    LOC: 2612   -   Route 2</option>
<option value="Riverview Middle    LOC: 2625   -   Route 4">Riverview Middle    LOC: 2625   -   Route 4</option>
<option value="Riverwood Elem    LOC: 2717   -   Route 5">Riverwood Elem    LOC: 2717   -   Route 5</option>
<option value="Robert R. Church Elem    LOC: 2626   -   Route 3">Robert R. Church Elem    LOC: 2626   -   Route 3</option>
<option value="Ross Elem    LOC: 2627   -   Route 3">Ross Elem    LOC: 2627   -   Route 3</option>
<option value="Rozelle Elem    LOC: 2630   -   Route 2">Rozelle Elem    LOC: 2630   -   Route 2</option>
<option value="Scenic Hills Elem    LOC: 2633   -   Route 1">Scenic Hills Elem    LOC: 2633   -   Route 1</option>
<option value="Sea Isle Elem    LOC: 2637   -   Route 2">Sea Isle Elem    LOC: 2637   -   Route 2</option>
<option value="Shady Grove Elem    LOC: 2640   -   Route 1">Shady Grove Elem    LOC: 2640   -   Route 1</option>
<option value="Sharpe Elem    LOC: 23   -   Route 3">Sharpe Elem    LOC: 23   -   Route 3</option>
<option value="Sheffield CTC    LOC: 2663   -   Route 3">Sheffield CTC    LOC: 2663   -   Route 3</option>
<option value="Sheffield Elem    LOC: 2655   -   Route 3">Sheffield Elem    LOC: 2655   -   Route 3</option>
<option value="Sheffield High    LOC: 2660   -   Route 3">Sheffield High    LOC: 2660   -   Route 3</option>
<option value="Shelby Oaks Elem    LOC: 2680   -   Route 1">Shelby Oaks Elem    LOC: 2680   -   Route 1</option>
<option value="Sherwood Elem    LOC: 2665   -   Route 2">Sherwood Elem    LOC: 2665   -   Route 2</option>
<option value="Sherwood Middle    LOC: 2670   -   Route 2">Sherwood Middle    LOC: 2670   -   Route 2</option>
<option value="Shrine School    LOC: 2675   -   Route 3">Shrine School    LOC: 2675   -   Route 3</option>
<option value="Snowden School    LOC: 2690   -   Route 2">Snowden School    LOC: 2690   -   Route 2</option>
<option value="South Park Elem    LOC: 2695   -   Route 3">South Park Elem    LOC: 2695   -   Route 3</option>
<option value="Southwind Elem    LOC: 175   -   Route 3">Southwind Elem    LOC: 175   -   Route 3</option>
<option value="Southwind High    LOC: 178   -   Route 3">Southwind High    LOC: 178   -   Route 3</option>
<option value="Springdale Elem    LOC: 2705   -   Route 2">Springdale Elem    LOC: 2705   -   Route 2</option>
<option value="Treadwell Elem    LOC: 2715   -   Route 1">Treadwell Elem    LOC: 2715   -   Route 1</option>
<option value="Treadwell Middle    LOC: 2723   -   Route 1">Treadwell Middle    LOC: 2723   -   Route 1</option>
<option value="Trezevant High    LOC: 2725   -   Route 1">Trezevant High    LOC: 2725   -   Route 1</option>
<option value="Vollentine Elem    LOC: 2730   -   Route 2">Vollentine Elem    LOC: 2730   -   Route 2</option>
<option value="W. H. Brewster Elem    LOC: 2053   -   Route 2">W. H. Brewster Elem    LOC: 2053   -   Route 2</option>
<option value="Wells Station Elem    LOC: 2745   -   Route 1">Wells Station Elem    LOC: 2745   -   Route 1</option>
<option value="Westhaven Elem    LOC: 2760   -   Route 4">Westhaven Elem    LOC: 2760   -   Route 4</option>
<option value="Westside Elem    LOC: 2750   -   Route 1">Westside Elem    LOC: 2750   -   Route 1</option>
<option value="Westwood High    LOC: 2770   -   Route 4">Westwood High    LOC: 2770   -   Route 4</option>
<option value="White Station Elem    LOC: 2777   -   Route 1">White Station Elem    LOC: 2777   -   Route 1</option>
<option value="White Station High    LOC: 2780   -   Route 2">White Station High    LOC: 2780   -   Route 2</option>
<option value="White Station Middle    LOC: 2783   -   Route 1">White Station Middle    LOC: 2783   -   Route 1</option>
<option value="Whitehaven Elem    LOC: 2785   -   Route 4">Whitehaven Elem    LOC: 2785   -   Route 4</option>
<option value="Whitehaven High    LOC: 2790   -   Route 4">Whitehaven High    LOC: 2790   -   Route 4</option>
<option value="Willow Oaks Elem    LOC: 2800   -   Route 3">Willow Oaks Elem    LOC: 2800   -   Route 3</option>
<option value="Winchester Elem    LOC: 2805   -   Route 3">Winchester Elem    LOC: 2805   -   Route 3</option>
<option value="Windridge Elem    LOC: 2810   -   Route 3">Windridge Elem    LOC: 2810   -   Route 3</option>
<option value="Wooddale High    LOC: 2815   -   Route 3">Wooddale High    LOC: 2815   -   Route 3</option>
<option value="Wooddale Middle    LOC: 2820   -   Route 3">Wooddale Middle    LOC: 2820   -   Route 3</option>
<option value="Woodstock Middle    LOC: 185   -   Route 5">Woodstock Middle    LOC: 185   -   Route 5</option>


    </select></h5>
</div>



</div> <!-- end of row-->





<br>
<input name="submit" type="submit" value="Change School Name"/>
    
    </form>
    <br>

<form action="RemoveDeviceAdmin.php" id="removeDeviceAdmin" method="POST" name="removeDeviceAdmine" onsubmit="checkForm()"  required="">
    <h3><b>Remove Device </b></h3>
    
    <div class = "row">
        
          <div class="col-md-3 col-xs-3">
        
       Submission ID: <input id="submissionId" name="submissionId" type="text" required=""  />
        
        
        </div>
        
        <div class = "col-md-3 col-xs-3"> 

Asset Tag: <input id="assetTag1" name="assetTag1"  type="text"/>
</div>



        
       
       </div>
       
       <br>
        <input name="submit" type="submit" value="Remove Device"/>
        
    
    
</form>


<form action="RemoveSubmission.php" id="removeSubmission" method="POST" name="removeSubmission" onsubmit="checkForm()"  required="">
    <h3><b>Remove Submission </b></h3>
    
    <div class = "row">
        
          <div class="col-md-3 col-xs-3">
        
       Submission ID: <input id="submissionId" name="submissionId" type="text" required=""  />
        
        
        </div>
        
 



        
       
       </div>
       
       <br>
        <input name="submit" type="submit" value="Remove Submission"/>
        
    
    
</form>

</div>

<br>
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




 

    
   

//Device Database Connection

$db_host = 'localhost:3306';
    $db_name = 'coxwm11_adf';
    $db_user = 'coxwm11_VEL';
    $db_pw = 'Ethel1908!!!';
    
    
    
$conn = new mysqli($db_host, $db_user, $db_pw, $db_name );

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
  
} 

 

else {
  echo "<h4> <b>0 Results Found</b></h4> ";

  
  
    $result-> close();
     
    $result1-> close();
    $result2-> close();
   
 }
    
   
    
   
    $conn->close(); 
    
}















?>













