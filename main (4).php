<?php
session_Start();
//sleep(3);
$id='';
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <?php ob_start(); ?>
  <title>Main page </title>
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
       background-color:#010423;
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
      padding-bottom:  10px;
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


});
</script>

</head>
<body class="container-fluid"  style="background-color: #ccc;font-size: 16px;" id="load_screen" >

<div id="spinner" style="display: none;">
	<img src="css/spinner.gif" alt="loading" id="img-spinner">
	
</div>
<?php
//session_Start();
include 'connection.php';

//echo "id".$_SESSION['id'];

if ($id!='') {
	# code...

?>
<div class="row" >
<div class="col-lg-2" style="background-color: #0c0032; box-shadow: 3px 4px 3px gray;"  >
    <div  style="background-color:  #0c0032;padding-bottom: 5px;padding-top: 15px;">
    <center>
    <img src="images/oscar.png" style="height: 100px;width: 100%;border: 2px solid gray;padding: 2px; background-color: white;">
   
   </center>
  
 
  </div>

    <div style="background-color: #010423;padding-top: 5px; padding-bottom: 5px;">
    <center>
    <div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 30px; width: 100%;"></span><a href="dashboard.php" style="color: white;font-size: 15px;"> Dashboard</a></div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 30px;width: 100%;margin-bottom: 10px;"></span> 
<select style="color: black;font-size: 15px;" class="form-control" id="menuselect">
  <option>--select--</option>
   <option value="createorder5.php">Create New order</option>
  <option value="previous.php">My Orders</option>
  <option value="trackorder.php">track Orders</option>

</select>
    </div>
    <div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 30px;width: 100%;margin-bottom: 10px;"></span>
  <select style="color: black;font-size: 15px;"  class="form-control" id="accauntsett">
  <option>--select--</option>
   <option value="update_detail.php">Update Details</option>


</select>

    </div>
  



   
  <?php    
 if (isset($_SESSION['admin'])){

 
if ($_SESSION['admin']==1) {
   

    ?>
     <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="adminp.php" style="color: white;font-size: 15px;"> All order</a></div>

   <div id="leftmenu" ><span class="glyphicon glyphicon-asterisk" style="float: left;font-size: 30px; width: 100%;"></span><a href="addproduct.php" style="color: white;font-size: 15px;"> Add product</a></div>
     <?php 

}
}
     ?>

    <div style="margin-top: 100%;">
    <div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
    <div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
    </div>
  
  </center>
  </div>  


  </div>
   <div class="col-lg-10"  >

<div class="container-fluid" id="d"  style="background-color: #0c0032;box-shadow: 1px 3px 4px gray; padding: 5px;color:white; " >

 <p  style=" border-radius: 25px;margin: 2px; background-color:  #010423;border:1px solid white;padding: 10px;text-align: center;float: left;" > <span class="fas fa-wallet" style="float: left;font-size: 20px;" ><?php
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
$sql="select * from customer where id=$id";

$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($result)) {
echo 'A/C: '.$row['accaunt'];
}

}

?> </span></p>
  <a href="main.php?logout=true" style="color: white;margin-left:  2px;" >
  <div style="border-radius: 25px;margin: 2px; background-color:   #010423;border:1px solid white;float: right;padding: 10px;text-align: center;">
   <span class="glyphicon glyphicon-log-out" style="float: right;text-align: center;font-size: 16px;color: white;margin-right: 2px;"></span>Log out
 </div></a>
   <div style="border-radius: 25px;margin: 2px; background-color:   #010423;border:1px solid white;float: right;padding: 10px;text-align: center;">
    <span class="glyphicon glyphicon-user" style="font-size: 16px;"> </span><span style="margin-left: 3px;font-weight: bold;"><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?> </span></div>
    </div>




<center>

<div class="row" style=" margin: 10px;margin-top:10%; ">

<a href="createorder5.php"><div class="bb"  style="float: left;margin-left: 10px;  height:150px; width: 30%;background-color: #0c0032;box-shadow: 6px 6px 3px gray;color: white; "><center><h3>Create New order</h3></center></div></a>
<a href="dashboard.php">
<div class="bb"  style="float: left;margin-left: 10px; height:150px; width: 30%;background-color: #0c0032;box-shadow: 6px 6px 3px gray; color:white;"><center><h3>Dashboard</h3></center></div></a>
<a href="previous.php">
<div class="bb"  style="float: left;margin-left: 10px; height:150px;width: 30%;background-color: #0c0032; box-shadow: 6px 6px 3px gray;color: white;"><center><h3>my all Order</h3></center></div></a>




</div>

</div>


</div>
<?php
}else{
	
	echo "<h1 class='alert alert-danger'>Please login</h1>";
	
	echo "<script>location='login.php'</script>";
}
 if (isset($_GET['logout'])){
if($_GET['logout']=='true'){
	session_destroy();
		echo "<script>location='login.php'</script>";
header('Location:https:login.php');
}

} ?>

</body>
</html>

	
