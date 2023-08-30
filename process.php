<?php
include 'connection.php';
$coupon_code = $_POST['coupon_code'];
$query = mysqli_query($conn, "SELECT * FROM coupon_code WHERE coupon_code = '$coupon_code' AND status = 1");
$row = mysqli_fetch_array($query);
if (mysqli_num_rows($query) > 0) {
    echo json_encode(array(
        "statusCode" => 200,
        "value" => $row['value']
    ));
} else {
    echo json_encode(array("statusCode" => 201));
}
?>