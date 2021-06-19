<?php
    session_start();

    $json = json_decode(file_get_contents("php://input"),true);
    
    // controllo login
    if($json['call'] == 1){
        
        $pid = $json['id'];
        $pass = $json['pass'];

        $id = 123;
        $password = 456;

        if( $id==$pid && $pass==$password){
            $_SESSION['admin_id'] = $id;
            echo json_encode($response['success'] = 1);
        }
        else{
            echo json_encode($response['success'] = 0);
        }

    }

    if($json['call'] == 11){
        
        $random = mt_rand(100000,999999);
        $insert = mysqli_query($con, "insert into auth (code) values('$random')");
        echo json_encode($random);
       
    }

?>