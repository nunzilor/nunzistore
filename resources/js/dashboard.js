$(document).ready(function(){

    // Get Products
    getProducts();

    // Form submit
    $("#addProduct").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : '../api/productForm.php',
            type : 'POST',
            data : new FormData(this),
            contentType : false,
            cache : false,
            processData : false,
            success : function(data){
                swal({
                        title: "prodotto aggiunto!",
                        text: "Prodotto aggiunto!",
                        icon: "fatto",
                        button: "OK!",
                        
                    }).then((ok)=>{
                        if(ok){
                            $("#name").val('');
                            $("#price").val('');
                            $("#pimage").val('');
                            getProducts();
                        }
                    });             
            }
        });
    });
});


function getProducts(){
    $.ajax({
        url : '../api/product.php',
        type : 'POST',
        dataType : 'json',
        contentType : 'application/json',
        data : JSON.stringify({
            call : 1
        }),
        success : function(data){
            var sr = 1;
            var getProducts = '';
            if(data==0){
               $("#productList").html('<p>non ci sono prodotti.</p>');
            }
            else{
                $.each(data, function(i, d){
                    getProducts+=   
                        '<tr>'+
                            '<th scope="row">'+sr+'</th>'+
                            '<td colspan="2">'+d.name+'</td>'+
                            '<td scope="col">'+d.price+'Euro</td>'+
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
                            '<th colspan="2">Nome</th>'+
                            '<th scope="col">Prezzo</th>'+
                            '<th scope="col">rimuovi</th>'+
                            '</tr>'+
                        '</thead>'+
                        '<tbody>'+
                        getProducts+
                        '</tbody>'+
                    '</table></div>'
                    );
            }
        }
        
    });
}


// Conferma
function conFirm(id){
    var id = id;
    swal({
        title: 'sicuro?',
        text: "conferma se vuoi eliminare tutto!",
        icon: "warning",
        buttons: ['Cancel', 'Confirm'],
        dangerMode: true,
        })
        .then((ok) => {
        if (ok) {
            deleteProduct(id);
        } else {
            swal("Think again!");
        }
    });
}


// cancella prodotto
function deleteProduct(id){
    $.ajax({
        url : '../api/product.php',
        type : 'POST',
        dataType : 'json',
        contentType : 'application/json',
        data : JSON.stringify({
            call : 0,
            id : id
        }),
        success : function(data){
            if(data==1){
                getProducts();
                swal({
                    title: 'prodotto rimosso!',
                    text: "Prodotto rimosso!!",
                    icon: "fatto!",
                    }); 
            }

        }
    });
}