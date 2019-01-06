<!DOCTYPE html>
<html>
<head>
   <title>Add Category</title>
     <link rel="venderboat icon" href="images/oscar.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' >


<style type="text/css">
    #leftmenu{
      margin-top: 20px;
       background-color: #010423;
       height: auto;
       width: 100%;
       color:white;
        font-size:  20px;
        padding: 5px;
        color:white;
   
        text-align: center;

    }
    .row1{
   
  margin: 0 auto;
  padding: 0;
  overflow: auto;
    }
    #d{
      background-color:#1e3a68;
      padding-top: 10px;
       height: auto;
       width: auto;
      color: white;
    }

    #colone{
      background-color: red;
      
    }

    .navbar-inverse{
      background-color: #1d4077;

    }

#leftmenu:hover { 
  width: 100%;
    color: #17202d;
    

   
}

  
.circularbutton{

  border-radius: 5px;
  border: 1px solid #98a1a4;
 padding: 10px;
  background: transparent; /* Change it to transparent */
  /* remove background-opacity */
  color: white;
  box-shadow: 2px 2px 2px white;

}
.h :hover{
  box-shadow: 1px 6px 8px white;
  border-radius: 20px;
}

.circularbutton:hover{

box-shadow: 3px 3px 2px white;

}



.bb
{
  border-radius: 20px;
}


  </style>


<style>
#spinner{
  position: fixed;
  top:50%;
left: 50%;
}
</style>
<script>


$(document).ready(function(){
$('#spinner').hide();



$('#accauntsett').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});
$('#menuselect').change(function(){
  var a=$(this).val();

$(location).attr('href',a);
});


$('.sh').hide();
$('#category1').change(function(){
  var cat=$(this).val();
$.ajax({
 url: "checkcategory.php",
 type: "get",
 data:'cat='+cat,
 success: function(data){
  if (data=='') {
 $('.sh').show(1000);
  $('#exist').text('');
  }else{
  $('#exist').text(data);
  $('.sh').hide();

 }

 }});
//alert($(this).val());
});

$('#create').click(function(){

var fp=$('#fp').val();
var sp=$('#sp').val();
var tp=$('#tp').val();
if (fp=='') {
  fp='Na'
}
if (sp=='') {
  sp='Na'
}
if (tp=='') {
  tp='Na'
}
var category1=$('#category1').val();
//alert(fp+' '+sp+' '+tp);

$.ajax({
 url: "checkcategory.php",
 type: "get",
 data:'fp='+fp+'&sp='+sp+'&tp='+tp+'&category1='+category1,
 success: function(data){
  alert(data);

 }});
//alert($(this).val());
});





});
</script>

</head>
<body class="container-fluid"  style="background-color: #ccc;font-size: 16px;" id="load_screen" >

<div id="spinner" style="display: none;">
  <img src="css/spinner.gif" alt="loading" id="img-spinner">
  
</div>
<?php
session_start();
include 'connection.php';

//if (isset($_SESSION['id'])) {
  # code...

?>
<div class="row" >

 <div class="col-lg-2" style="background-color:  #0c0032; box-shadow: 3px 4px 3px gray;"  >
    <div  style="background-color:  #0c0032;padding-bottom: 5px;padding-top: 15px;">
    <center>
    <img src="images/oscar.png" style="height: 100px;width: 100%;border: 2px solid gray;padding: 2px; background-color: white;" >

   
  
    </center>
  </div>

     <div style="background-color: #010423;;padding-top: 5px; padding-bottom: 5px;">
  <center>
   <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="admindash.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;"></span> <a href="adminp.php" style="color: white;font-size: 15px;">All Orders</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;"></span><a href="register.php" style="color: white;font-size: 15px;">Create new accaunt</a></div>


   <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addproduct.php" style="color: white;font-size: 15px;"> Add product</a></div>
     <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addcategory.php" style="color: white;font-size: 15px;"> Add category</a></div>
     <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="updatemerchant.php" style="color: white;font-size: 15px;">Update merchant detail</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="update_status.php" style="color: white;font-size: 15px;"> Update Order Status</a></div>

  </center>
  </div> 

  </div>
   <div class="col-lg-10"  >

   <div class="container-fluid" id="d"  style="background-color: #0c0032;box-shadow: 1px 3px 4px gray; padding: 5px;color:white; " >


  <a href="main.php?logout=true" style="color: white;margin-left:  2px;" >
  <div style="border-radius: 25px;margin: 2px; background-color:   #010423;border:1px solid white;float: right;padding: 10px;text-align: center;">
   <span class="glyphicon glyphicon-log-out" style="float: right;text-align: center;font-size: 16px;color: white;margin-right: 2px;"></span>Log out
 </div></a>
   <div style="border-radius: 25px;margin: 2px; background-color:   #010423;border:1px solid white;float: right;padding: 10px;text-align: center;">
    <span class="glyphicon glyphicon-user" style="font-size: 16px;"> </span><span style="margin-left: 3px;font-weight: bold;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </span></div>
    </div>






<center >

<table class="table" style="box-shadow: 3px 4px 3px gray;margin-top: 10px;background-color:white;"  >
  <tbody >
    <tr>
      <td>Category name</td><td><input type="text" placeholder="name" class="form-control" name="" id="category1"><span id="exist" style="color: red;"></span> </td>
    </tr>
    <tr class="sh">
      <td >Enter first property</td><td><input type="text" id="fp" class="form-control" placeholder="first property" name=""> </td>
    </tr>
    <tr class="sh">
      <td>Enter second property</td><td><input type="text" id="sp" class="form-control" placeholder="second property" name=""></td>
    </tr>
     <tr class="sh">
      <td>Enter third property</td><td><input type="text" id="tp" class="form-control" placeholder="third property" name=""></td>
    </tr>
    <tr>
      <td colspan="2"><input type="button" class="btn btn-primary sh" id="create" name="" value="create"></td>
    </tr>
  </tbody>
</table>
</center>
<span style="font-size: 13px;">Note: Do not add properties imagepath,zone,price and id because its already added.keep empty if not applicable</span>

</div>


</div>
<?php// }?>
</body>
</html>

  
