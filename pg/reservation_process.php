<?php
     error_reporting( E_ALL );
     ini_set( "display_errors", 1 );

    include '../inc/dbconfig.php';

    $db = $pdo;

    include '../inc/reservation.php';
    // Array ( [companyname] => aaa 
    // [name] => aaaa 
    // [email] => hfis@naver.com 
    // [phonenumber] => 01085644780 
    // [detail] => 1234 )
    $companyname = (isset($_POST['companyname']) && $_POST['companyname'] != '') ? $_POST['companyname'] : '';
    $name        = (isset($_POST['name'       ]) && $_POST['name'       ] != '') ? $_POST['name'       ] : '';
    $email       = (isset($_POST['email'      ]) && $_POST['email'      ] != '') ? $_POST['email'      ] : '';
    $phonenumber = (isset($_POST['phonenumber']) && $_POST['phonenumber'] != '') ? $_POST['phonenumber'] : '';
    $detail      = (isset($_POST['detail'     ]) && $_POST['detail'     ] != '') ? $_POST['detail'     ] : '';
    $mode        = (isset($_POST['mode'       ]) && $_POST['mode'       ] != '') ? $_POST['mode'       ] : '';

    if($mode == ''){
        $arr = [ "result" => "empty_mode" ];
        $json_str = json_encode($arr);
        
        die($json_str);
    }

    $reser = new Reservation($db);
    if($mode == 'input'){
        if($companyname == ''){
            $arr = [ "result" => "empty_companyname" ];
            die(json_encode($arr));
        }

        if($name == ''){
            $arr = [ "result" => "empty_name" ];
            die(json_encode($arr));
        }

        if($email == ''){
            $arr = [ "result" => "empty_email" ];
            die(json_encode($arr));
        }
        
        if($reser->email_format_check($email) === false){
            die(json_encode(['result' => 'email_format_wrong']));
        }

        if($phonenumber == ''){
            $arr = [ "result" => "empty_phonenumber" ];
            die(json_encode($arr));
        }

        $arr = [
            'companyname' => $companyname,
            'name' => $name,
            'email' => $email,
            'phone_number' => $phonenumber,
            'content' => $detail,
        ];

        $reser->input($arr);

        die(json_encode([ "result" => "success" ]));
    }
?>