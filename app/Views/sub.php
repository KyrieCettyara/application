<?php

$data['name'] = $_POST['firstName'] . " " . $_POST['lastName'];
$data['email'] = $_POST['email'];
$data['message'] = $_POST['message'];

echo json_encode($data);
exit;
