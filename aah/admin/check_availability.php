<?php 
require_once("includes/config.php");
// code for empid availablity
if(!empty($_POST["empcode"])) {
	$empid=$_POST["empcode"];
	
$sql ="SELECT StuId FROM tblstudents WHERE StuId=:empid";
$query= $dbh->prepare($sql);
$query-> bindParam(':empid',$empid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
echo "<span style='color:red'> Student id already exists .</span>";
 echo "<script>$('#add').prop('disabled',true);</script>";
} else{
	
echo "<span style='color:green'> Student id available for Registration .</span>";
echo "<script>$('#add').prop('disabled',false);</script>";
}
}

// code for emailid availablity
if(!empty($_POST["emailid"])) {
$empid= $_POST["emailid"];
$sql ="SELECT EmailId FROM tblstudents WHERE EmailId=:emailid";
$query= $dbh -> prepare($sql);
$query-> bindParam(':emailid',$empid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
echo "<span style='color:red'> Email id already exists .</span>";
 echo "<script>$('#add').prop('disabled',true);</script>";
} else{
	
echo "<span style='color:green'> Email id available for Registration .</span>";
echo "<script>$('#add').prop('disabled',false);</script>";
}
}




?>
