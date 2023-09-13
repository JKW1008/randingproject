<?php
$companyname = (isset($_POST['companyname']) && $_POST['companyname'] != '') ? $_POST['companyname'] : '';
$name = (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name'] : '';
$phonenumber = (isset($_POST['phonenumber']) && $_POST['phonenumber'] != '') ? $_POST['phonenumber'] : '';

if ($companyname == '') {
    $arr = ['result' => 'empty_companyname'];
    die(json_encode($arr));
}

if ($name == '') {
    $arr = ['result' => 'empty_name'];
    die(json_encode($arr));
}

if($phonenumber == ''){
    $arr = [ "result" => "empty_phonenumber"];
    die(json_encode($arr));
}

include '../inc/dbconfig.php';
include '../inc/reservation.php';

$db = $pdo;
$reservation = new Reservation($db);

// 로그인 처리
$result = $reservation->login($companyname, $name, $phonenumber);
$memArr = $reservation->getInfo($companyname);
if ($result) {
    // 로그인 성공 시 처리하는 코드 작성
    $arr = ['result' => 'success', 'data' => $memArr];
 
} else {
    // 로그인 실패 시 처리하는 코드 작성
    $arr = ['result' => 'fail'];
}

echo json_encode($arr);
?>