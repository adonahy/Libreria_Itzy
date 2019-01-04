/*Iniciar sesión*/
    $("#login").click(function(){
        verify_credentials();
    });

    $('#user').bind("enterKey",function(e){
        verify_credentials();
    });
    $('#user').keyup(function(e){
        if(e.keyCode == 13) {
            $(this).trigger("enterKey");
        }
    });
    $('#password').bind("enterKey",function(e){
        verify_credentials();
    });
    $('#password').keyup(function(e){
    if(e.keyCode == 13) {
        $(this).trigger("enterKey");
    }
    });

/*Verifica credenciales*/
function verify_credentials() {   
    var user = $("#user").val();    
    var pass = $("#password").val();
    $.ajax({ //Inicio del Ajax
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "login_services.php",
        data: ({
            us: user,
            pw: pass, 
            option: 'verify_credentials'                   
        }),
        dataType: "json",        
        success: function(response) {                                                       
            /*Mostramos el main*/
            if(response.success == 1) {
                window.location.href = "tickets_dashboard_html.php";
            } else if(response.success == 2) {
                $("#error").html(response.error);
            }
        }    
    });//Fin del Ajax
}  
 
/*function forgot() {
    var iduser = $("#user").val();
    if(iduser != "") {
        $.ajax({ //Inicio del Ajax
            contentType: "application/x-www-form-urlencoded",
            type: "POST",
            url: "login_services.php",
            data: ({
                us: iduser,                
                option: 'olvido_contrasenia'                   
            }),
            dataType: "json",        
            success: function(response) {                                                       
                /*Mostramos el main
                if(response.success == 1) {
                    window.location.href = "forgot_password.php?id="+iduser;
                } else if(response.success == 2) {
                    $("#error").html(response.error);
                }
            }    
        });//Fin del Ajax
    } else {
        $("#error").html('Please enter the username');
    }     
}*/