<?php
include'db_connect.php';
$compid=$_POST['compid'];
echo $compid;
$sql="UPDATE complaint
SET status = 'Proceed'
WHERE compid = '$compid' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}?>