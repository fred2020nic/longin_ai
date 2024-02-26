$(document).ready(function(){
    $('#loginForm').submit(function(event){
        event.preventDefault(); // Evitar el envío del formulario por defecto
        var username = $('#username').val();
        var password = $('#password').val();
        
        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {
                username: username,
                password: password
            },
            success: function(response){
                if(response == "success"){
                    $('#message').html("Inicio de sesión exitoso");
                    // Aquí podrías redirigir al usuario a otra página si lo deseas
                } else {
                    $('#message').html("Credenciales incorrectas");
                }
            }
        });
    });
});
