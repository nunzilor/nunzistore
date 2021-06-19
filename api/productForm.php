<?php

include('connect.php');

// aggiungi prodotto con le query nel database + aggiunge foto nella cartella del path selezionato nella riga 13
//per l'admin
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$date = date('d-F-Y');

$query = mysqli_query($con, "insert into product (name, price, image, created_at) values('$name','$price','$image','$date')");
$caricamenti = move_uploaded_file($tmp_name,"../uploads/$image");

if($query and $caricamenti){
    echo json_encode($response['success']=1);
}
else{
    echo json_encode($response['success']=0);
}

?>