<?php
    include('connect.php');
    session_start();
    $json = json_decode(file_get_contents("php://input"),true);

    // Registrazione
    if($json['call']==1){

        $name = $json['name'];
        $tel = $json['telefono'];
        $password = $json['password'];
        $date = date('d-m-Y');

        $query = mysqli_query($con, "insert into user (name, telefono, password, created_at) values('$name','$tel','$password','$date')");
        if($query){
            echo json_encode($response['success']=1);
        }
        else{
            echo json_encode($response['success']=0);
        }
    }

    // Login utente
    if($json['call']==2){

        $tel = $json['telefono'];
        $password = $json['password'];

        $query = mysqli_query($con, "select id, name, telefono from user where telefono='$tel' and password='$password'");
        if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_array($query)){
                $_SESSION['user_id'] = $row['id'];
                echo json_encode($response['success']=1);
            }
        }
        else{
            echo json_encode($response['success']=0);
        }
    }
?>