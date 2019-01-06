<?php
session_Start();
/*
$conn=mysqli_connect("localhost","vendorbo_mer","vivekmittal","vendorbo_merchants");

if(!$conn){
	echo die();
}

$sql = "UPDATE `customer` SET `fname` = 'f1ss' WHERE `customer`.`id` = 17";
if (mysqli_query($conn,$sql)) {
echo "success";
}else{
	echo "fail";
}
*/

echo 'session'.$_SESSION['id'];
echo 'cookie'.$_COOKIE['id'];

?>
<?php/*
$conn=mysqli_connect("localhost","vendorbo_mer","vivekmittal","vendorbo_merchants");
echo 'here1';
$id=$_SESSION['id'];
      $sql="select * from logo where cid=17";
      $result=mysqli_query($conn,$sql);
      echo 'here2';
      while($row = mysqli_fetch_assoc($result)) {
          echo $row['id'];
          echo 'here3';
        
      }
        
        



    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
       */ 
  ?>