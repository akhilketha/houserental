<?php
function myFunction($hid){
	echo "hey";
}
  $con=mysqli_connect("localhost","root","","rent");
  if(!$con)
  {
	  echo 'error';
  }
  $houseid=$_POST['houseid'];
  $sql = "UPDATE normal n SET n.status=0 WHERE n.houseid=$houseid";
if($con->query($sql)){
	echo "booked sucessfully";
}
?>