$(document).ready(function(){
    getData();
});

function getData(){
        $.ajax({
            url : '../api/product.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 4,
            }),
            success : function(data){
                var sr = 1;
                var getProducts = '';
                var count = data.length>0 ? data.length : '';
                $("#count").html(count);
                var total = 0;
                if(data==0){
                   $("#productList").html('<p class="btn btn-danger">non ci sono prodotti nel carrello.</p>');
                }
                else{
                    $.each(data, function(i, d){
                        total = total + parseInt(d.price);
                        getProducts+=   
                            '<tr>'+
                                '<th scope="row">'+sr+'</th>'+
                                '<td colspan="2">'+d.name+'</td>'+
                                '<td scope="col">'+d.price+'€</td>'+
                                '<td scope="col"><button class="btn btn-danger" onclick="conFirm('+d.id+')">Rimuovi</button></td>'+
                            '</tr>';
                            sr++;
                    });

                    $("#productList").html(  
                       '<div class="table-responsive-md" style="background-color:white">'+
                       '<table class="table table-hover">'+
                            '<thead>'+
                                '<tr>'+
                                '<th scope="col">id</th>'+
                                '<th colspan="2">Prodotto</th>'+
                                '<th scope="col">Prezzo</th>'+
                                '<th scope="col">rimuovere?</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody>'+
                            getProducts+
                            '<tr><th colspan="3">Totale</th><th>'+total+'€</th><td></td></tr>'+
                            '</tbody>'+
                        '</table></div>'
                        );
                }
            }
            
        });
    }


      // Conferma
      function conFirm(pid){
        var pid = pid;
        swal({
            title: 'sicuro?',
            text: "conferma per eliminare tutti i prodotti!",
            icon: "warning",
            buttons: ['Cancel', 'sicuro?'],
            dangerMode: true,
            })
            .then((ok) => {
            if (ok) {
                deleteProduct(pid);
            } else {
                swal("ripensamento ehh!");
            }
        });
    }


    // cancella prodotti
    function deleteProduct(pid){
        $.ajax({
            url : '../api/product.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 5,
                pid : pid
            }),
            success : function(data){
                if(data==1){
                    getData(); 
                }

            }
        });
    }