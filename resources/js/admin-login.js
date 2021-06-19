function loginFun(){
    var id = $("#id").val();
    var pass = $("#pass").val();

    if(id=='' || pass==''){
        alert('i campi non possono essere vuoti!');
    }
    else{
        $.ajax({
        url : 'api/admin.php',
        type : 'POST',
        dataType : 'json',
        contentType : 'application/json',
        data : JSON.stringify({
            call : 1,
            id : id,
            pass : pass,
        }),
        success : function(data){
            if(data==0){
                swal({
                        title: "credenziali sbagliate!",
                        text: "numero o password sbagliata",
                        icon: "error",
                        button: "OK!",
                });
            }
            else{
               window.location = 'routes/dashboard.php';
            }
        }
        
    });
    }

}