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
                call : 3,
            }),
            success : function(data){
                console.log(data);
                var getProducts = '';
                var button = '';
                var badge = data[1]>0 ? data[1] : '';
                $("#count").html(badge);
                if(data==0){
                   $("#productList").html('<p>non ci sono prodotti.</p>');
                }
                else{

                    $.each(data[0], function(i, d){
                        getProducts+=   
                            '<div class="col-md-4 form-group text-center py-3">'+
                                '<div>'+
                                    '<h5 >'+d.name+'</h5>'+
                                    '<img src="../uploads/'+d.image+'" height="100" width="80">'+
                                    '<h6 >'+d.price+'€</h6>'+
                                    '<button type="button" onclick="addToCart('+d.id+')" class="btn btn-warning"><b>Aggiungi al carrello</b></button>'+
                                '</div>'+
                            '</div>';
                    });

                    $("#productArea").html(  
                        '<form>'+
                        '<div class="form-row">'+
                            getProducts+
                        '</div>'+
                        '</form>'
                    );
                }
            }
            
        });
    }

    function addToCart(pid){
    
        var pid = pid;

        $.ajax({
            url : '../api/product.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 2,
                pid : pid,
            }),
            success : function(data){
                if(data==1){
                    getData();

                }
                else{
                    swal({
                        title: 'gia nel carrello!',
                        text: "gia nel carrello!",
                        icon: "error",
                    });
                }                
            }
            
        });
    }
