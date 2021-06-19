$(document).ready(function(){
    getProducts();

    $("#registerBtn").click(function(){
        var name = $("#name").val();
        var telefono = $("#telefono").val();
        var password = $("#pass").val();

        if(name=='' || telefono=='' || password==''){
            alert('i campi non posso essere vuoti!');
        }
        else{
            $.ajax({
            url : 'api/user.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 1,
                name : name,
                telefono : telefono,
                password : password
            }),
            success : function(data){
                if(data==1){
                    swal({
                        title: 'Registration successfull!',
                        text: "registrazione avvenuta con successo!",
                        icon: ":D",
                        })
                        .then((ok) => {
                        if (ok) {
                            $("#name").val('');
                            $("#telefono").val('');
                            $("#pass").val('');
                        } 
                    });
                }
            }
            
        });
        }
    });

    $("#loginBtn").click(function(){
        var telefono = $("#telefono").val();
        var password = $("#password").val();

        if(telefono=='' || password==''){
            alert('i campi non possono essere vuoti!');
        }
        else{
            $.ajax({
            url : 'api/user.php',
            type : 'POST',
            dataType : 'json',
            contentType : 'application/json',
            data : JSON.stringify({
                call : 2,
                telefono : telefono,
                password : password
            }),
            success : function(data){
                if(data==1){
                    window.location = 'routes/main.php';
                }
                else{
                    swal({
                            title: "Invalid credentials!",
                            text: "inserire le credenziali giuste!",
                            icon: "errore",
                            button: "OK!",
                        });
                }
            }    
        });
        }
    });

});

function getProducts(){
        $.ajax({
            url : 'api/product.php',
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
                            '<div class="col-md-4 form-group text-center py-3">'+
                                '<div>'+
                                    '<h5 class="py-1" background-color:"white">'+d.name+'</h5>'+
                                    '<img src="uploads/'+d.image+'" height="100" width="80">'+
                                    '<h6 class="py-2">'+d.price+'€</h6>'+
                                    '<button type="button" onclick="message()" class="btn btn-warning"><b>Aggiungi al carrello</b></button>'+
                                '</div>'+
                            '</div>';
                            sr++;
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

    function message(){
        alert('fai login o registrati !');
    }
