<?php
require_once '../config/connection.php';
require_once '../models/timesince.php';

$CustomerId = 'C0621001';
$nama = $greeting = '';
$date = date('Y-m-d H:i:s');
$callback = [];



if (isset($_POST)) {
    $nama         = $_POST['Name'];
    $greeting     = $_POST['Greeting'];

    $query = mysqli_query($conn, "INSERT INTO greeting(customer_id,`name`,greeting,created_at) VALUES('$CustomerId','$nama','$greeting','$date')");

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
