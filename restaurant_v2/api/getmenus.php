
<?php
$conn = new mysqli('127.0.0.1', 'root', '1q2w3e4r', 'restaurant');
$sql = "select * from menu";


$rs = $conn->query($sql);
$ret = array();
while($row = $rs->fetch_array()){
    array_push($ret, $row);
}

print json_encode($ret);