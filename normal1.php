<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="POST" action="booking.php">
<?php
function myFunction($hid){
	echo "hey";
}
  $con=mysqli_connect("localhost","root","","rent");
  if(!$con)
  {
	  echo 'error';
  }
  $sql = "SELECT * FROM normal";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
	   if($row['status']==1){
		   
	       $s2=$row['link'];
	       echo '<img src="'.$s2.'" alt="image not get from data base" style"width:300px;height:300px">';
           echo "<br>";
	       echo "<strong>HOUSE_ID:-".$row["houseid"]."</strong>"."<br>";
       	   echo "<Strong>"."Rent:-"."</strong>".$row["rent"]."<br>";
           echo "<Strong>"."area:-"."</strong>".$row["area"]."<br>";
           echo "<Strong>"."address:-"."</strong>".$row["address"]."<br>";
           echo "<Strong>"."Owner_number:-"."</strong>".$row["ownerno"]."<br>";
		   echo '<p id="demo"></p>';
           echo "<br>";
           echo "<br>";
           echo "<br>";
	   }		   
    }
}
?>
<input type="text" name="houseid" required/>
<input type="submit" name="submit"/>

</form>
   </body>
   </html>