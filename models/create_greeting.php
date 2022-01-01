<?php
require_once '../config/connection.php';
require_once '../models/timesince.php';

$CustomerId = 'CL21009';
$order = 'NH1221001';
$nama = $greeting = '';
$date = date('Y-m-d H:i:s');
$callback = [];

if (isset($_POST)) {
    $nama         = $_POST['Name'];
    $greeting     = $_POST['Greeting'];

    $query = mysqli_query($conn, "INSERT INTO greeting(customer_id,`name`,greeting,created_at,order_id) VALUES('$CustomerId','$nama','$greeting','$date','$order')");

    if (!$query) {
        $callback = [
            'code' => 0,
            'msg' => "Faild add greeting. Please try again!",
            'nama' => '',
            'greeting' => '',
            'date' => '',
        ];
    } else {
        $callback = [
            'code' => 1,
            'msg' => "Success. Your greeting has been added!",
            'nama' => $nama,
            'greeting' => $greeting,
            'date' => time_since(strtotime($date)),
        ];
    }
    echo json_encode($callback);
}
