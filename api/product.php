<?php

//parte di codice per la gestione dei prodotti
session_start();
include('connect.php');
$json = json_decode(file_get_contents("php://input"),true);

// selezionare prodotti
if($json['call']==1){
    $getProducts = mysqli_query($con, "select * from product");
    if(mysqli_num_rows($getProducts)>0){
        $products = mysqli_fetch_all($getProducts, MYSQLI_ASSOC);
        $empty = mysqli_free_result($getProducts);
        echo json_encode($products);
    }
    else{
        echo json_encode($response['success'] = 0);
    }
}

// cancellare prodotti chiamata json per eliminare il prodotto tramite id nella tabella
if($json['call']==0){
    $id = $json['id'];
    $delProduct = mysqli_query($con,"delete from product where id='$id'");
    if($delProduct){
        echo json_encode($response['success']=1);
    }
}

// aggiungere al carrello
if($json['call']==2){
    $pid = $json['pid'];
    $uid = $_SESSION['user_id'];
    $date = date('d-m-Y');

    $check = mysqli_query($con, "select * from cart where uid='$uid' and pid='$pid'");
    if(mysqli_num_rows($check)>0){
        echo json_encode($response['success']=0);
    }
    else{
        $query = mysqli_query($con,"insert into cart (pid, uid, created_at) values('$pid','$uid','$date')");
        if($query){
            echo json_encode($response['success']=1);
        }
    }
    
}

// controllare tutti i dati 
if($json['call']==3){
    $id = $_SESSION['user_id'];
    $getProducts = mysqli_query($con, "select * from product");
    $getList = mysqli_query($con, "select * from cart where uid='$id'");
    $getNo = mysqli_num_rows($getList);        
    if(mysqli_num_rows($getProducts)>0){
        $products = mysqli_fetch_all($getProducts, MYSQLI_ASSOC);
        $empty = mysqli_free_result($getProducts);
        echo json_encode([$products, $getNo]);
    }
    else{
        echo json_encode($response['success']==0);
    }
}

// controllare i prodotti nel carrello
if($json['call']==4){
    $id = $_SESSION['user_id'];
    $getList = mysqli_query($con, "select product.name, product.price, product.id from product LEFT JOIN cart ON cart.pid=product.id where cart.uid='$id'");
    if(mysqli_num_rows($getList)>0){
        $products = mysqli_fetch_all($getList, MYSQLI_ASSOC);
        $empty = mysqli_free_result($getList);
        echo json_encode($products);
    }
    else{
        echo json_encode($response['success']=0);
    }
}

// cancellare prodotti dal carrello
if($json['call']==5){
    $pid = $json['pid'];
    $id = $_SESSION['user_id'];
    $delProduct = mysqli_query($con,"delete from cart where uid='$id' and pid='$pid'");
    if($delProduct){
        echo json_encode($response['success']=1);
    }
}

?>