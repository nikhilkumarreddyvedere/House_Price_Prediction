
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<nav class="navbar navbar-default" style="">
<div class="container-fluid" style="">
<div class="navbar-header" style="margin-left: 4%;margin-top: 20px;">
<img src="https://www.insaid.co/wp-content/uploads/2018/04/INSAID_Logo-1.png">
<a class="navbar-brand" href="#" style="font-size: 30px !important;font-weight: 600;margin-left: 100px;">INSAID House Brokers &amp; Co.</a>
</div>
</div>
</nav>  
<div class="row" style="margin-top:50px;margin-right: 0px;">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="well well-sm">
<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset style="text-align:  center;">
<legend class="text-center header">Mumbai House Price Prediction</legend>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<select placeholder="Select Number_of_Rooms" type="text" id="Avg_Rooms" name="AvgRooms" class="form-control" style="width: 230px;">
<option value="" disabled="" selected="">Select Number of Rooms</option>
<option value="<?php echo(rand(0,25));?>">3 BHK</option>
<option value="<?php echo(rand(25,79));?>">4 BHK</option>
<option value="<?php echo(rand(79,100));?>">5 BHK</option>
</select>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){ /* PREPARE THE SCRIPT */
$("#Avg_Rooms,#House_age").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
//var Avg_Rooms = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
//var dataString = "Avg_Rooms="+Avg_Rooms; /* STORE THAT TO A DATA STRING */
this.classList.add("final"); 
if ($(".final").length === 2)
{ 
console.log("All data are changed");
var v1= $('#Avg_Rooms :selected').text(); 

var v2 = $('#House_age :selected').text(); 
$.ajax({ /* THEN THE AJAX CALL */ 
type: "POST", 
url: "input.php", 
data: + v1 + '&' + v2, 
dataType: "json",

success: function(result)
{ /* GET THE TO BE RETURNED DATA */

$(".the-return").html( '<style>.test{display:none;} </style><div class="form-group"><div class="col-md-20"><input readonly value=' + result[0].CrimeRate + ' type="text" id="CrimeRate" name="CrimeRate" class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input readonly value='+result[0].NitricOxide+' type="text"id="NitricOxide" name="NitricOxide"class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input readonly value='+result[0].DistanceFromBusinessCenter+' id="DistanceFromBusinessCenter" name= "DistanceFromBusinessCenter" type="text" class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input readonly value='+result[0].AccessibilityToHighway+' type="text" id="AccessibilityToHighway"name="AccessibilityToHighway"class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input  readonly value='+result[0].TeacherStudentRatio+' type="text" id ="TeacherStudentRatio"name="TeacherStudentRatio" class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input readonly  value='+result[0].BaseCorruptionRate+' type="text" id="BaseCorruptionRate"name="BaseCorruptionRate"class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input  readonly value='+result[0].BelowMiddleClass+' type="text" id="BelowMiddleClass"name="BelowMiddleClass"class="form-control"></div></div><div class="form-group"><div class="col-md-20"><input readonly  value='+result[0].Tax+' type="text" id="Tax"name="Tax"class="form-control"> </div></div>');

}


});
}
});
});
</script>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<select placeholder="Select House age" id="House_age" name="House_age" class="form-control">
<option value="" disabled="" selected="">Select the House age</option>
<option value="<?php echo(rand(5,6.0));?>">New</option>
<option value="<?php echo(rand(6,6.75));?>">Medium OLd</option>
<option value="<?php echo(rand(6.75,7));?>">Old</option>
</select>
</div>

</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<select placeholder="Ratio Residential/Business" id="Residential_Business" name="Residential_Business" class="form-control">
<option value="" disabled="" selected="">Ratio Residential/Business</option>
<option value="High">High</option>
<option value="Medium">Medium </option>
<option value="Low">Low</option>
</select>
</div>
</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<select placeholder="Waterbody" id="Waterbody" name="Waterbody" class="form-control">
<option value="" disabled="" selected="">Close to Waterbody ?</option>
<option value="<?php echo("1");?>">Yes</option>
<option value="<?php echo("0");?>">No </option>
</select>
</div>
<script>
var dropdown2 = document.getElementById("Waterbody");
dropdown2.onchange = function(event){
if(dropdown2.value=="Yes"){
alert("1");
}
if(dropdown2.value=="No"){
alert("0");
}
}

</script>

</div>


<h5>--------- More info --------- </h5>


<div id ="the-return"class="the-return">

</div>

<div class="test">
<div class="form-group">
<div class="col-md-20">
<input type="text" id="CrimeRate" placeholder="Crime Rate" name="CrimeRate" class="form-control" style="
width: 220px;
" disabled="">

</div>
</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input disabled type="text"  placeholder="Nitric Oxide" class="form-control" style="width: 220px;"id="show">
</div>
</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input type="text" placeholder="Tax" id="Tax" name="Tax" class="form-control" style="width: 220px;" value='' disabled>
</div>
</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input placeholder="DistanceFromBusinessCenter
" type="text" id="TeacherStudentRatio" name="TeacherStudentRatio" class="form-control" style="
width: 220px;
" disabled="">
</div>
</div>

<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input placeholder="Accessibility To Highway
" type="text" id="Below Middle Class" name="BelowMiddleClass" class="form-control" style="
width: 220px;
" disabled="">
</div>
</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input placeholder="Teacher Student Ratio

" type="text" id="TeacherStudentRatio
" name="TeacherStudentRatio
" class="form-control" style="
width: 220px;
" disabled="">
</div>
</div>
<div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input placeholder="BaseCorruptionRate
" type="text" id="BelowMiddleClass
" name="BelowMiddleClass

" class="form-control" style="
width: 220px;
" disabled="">
</div>
</div><div class="form-group">
<div class="col-md-20 col-md-offset-1">
<input placeholder="Below Middle Class

" type="text" id="BelowMiddleClass
" name="BelowMiddleClass
" class="form-control" style="
width: 220px;
" disabled="">
</div>
</div>
</div>
<br>
<div class="form-group">
<div class="col-md-12 text-center">
<button type="submit" class="btn btn-primary btn-lg">Predict House Price</button>
</div>
</div>
</fieldset>
</form>
<?php
$Residential_Business=$Waterbody = $propBusiness =$propResidential =$House_age = $AvgRooms = $CrimeRate = $NitricOxide = $DistanceFromBusinessCenter =$AccessibilityToHighway=$Tax=$TeacherStudentRatio=$BaseCorruptionRate=$BelowMiddleClass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $AvgRooms = $_POST["AvgRooms"];
  $House_age =$_POST["House_age"];
  $Waterbody =$_POST["Waterbody"];
  $CrimeRate = $_POST["CrimeRate"];
  $Tax = $_POST["Tax"];
  $DistanceFromBusinessCenter = $_POST["DistanceFromBusinessCenter"];
  $AccessibilityToHighway = $_POST["AccessibilityToHighway"];
  $TeacherStudentRatio = $_POST["TeacherStudentRatio"];
  $BaseCorruptionRate = $_POST["BaseCorruptionRate"];
  $BelowMiddleClass= $_POST["BelowMiddleClass"];
  $NitricOxide = $_POST["NitricOxide"];
  $Residential_Business = $_POST["Residential_Business"];

   if($Residential_Business="High")
   {
     $propBusiness =  rand(2.1,4);
     $propResidential = rand(80,100);
   }
   if($Residential_Business="Medium")
   {
     $propBusiness =  rand(5,7.8);
     $propResidential = rand(40,60);
   }
   if($Residential_Business="Low")
   {
     $propBusiness =  rand(17,25);
     $propResidential = rand(0,30);
   }

}

?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<script>
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>";
?>

 // <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  //<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  //<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade myModal"  id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">House Price Prediction</h4>
        </div>
        <div class="modal-body">
          <?php 
$output = exec("/usr/bin/python3 Mumbai-Copy1_v2.py");
echo $output;
?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<?php
}
?>
<?php
echo "<p>Your Input:</p>";
echo $AvgRooms;
echo "<br>";
echo $House_age;
echo "<br>";
echo $Waterbody;
echo "<br>";
echo $CrimeRate;
echo "<br>";
echo $Tax;
echo "<br>";
echo $DistanceFromBusinessCenter;
echo "<br>";
echo $AccessibilityToHighway;
echo "<br>";
echo $TeacherStudentRatio;
echo "<br>";
echo $BaseCorruptionRate;
echo "<br>";
echo $BelowMiddleClass;
echo "<br>";
echo $propBusiness;
echo "<br>";
echo $propResidential;
echo "<br>";
echo $NitricOxide;
?>
</div>
</div>
<div class="col-md-6">
<div>
<div class="panel panel-default">
<div class="panel-body text-center">
<div id="map" style="width:100%;height:70%;"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
function myMap() {
var mapCanvas = document.getElementById("map");
var mapOptions = {
center: new google.maps.LatLng(19.0600, 72.8900), zoom:13
};
var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuSnmlc5hBz0f9a43R5HZQG2lQlv-859c&callback=myMap"></script>
<style>
.map {
min-width: 300px;
min-height: 300px;
width: 100%;
height: 100%;
}

.header {
background-color: #F5F5F5;
color: #36A0FF;
height: 70px;
font-size: 27px;
padding: 10px;
}
.form-group {
margin-bottom: 1rem;
display: inline-block;
padding: 10px;
}
</style>

</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">






  <!-- Trigger the modal with a button -->
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">House Price Prediction</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  



