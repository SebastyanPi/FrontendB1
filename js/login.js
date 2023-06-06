const formRegister = document.getElementById('formLogin');
document.getElementById('formLogin').addEventListener('submit',function(e){
    e.preventDefault(); //Detener el evento
    
    //Obtenemos los valores
    const email = formRegister.email_form.value;
    const password = formRegister.password_form.value;
    
    //variable que determina si hay un campo vacio
    var is_empty = false;

    //Validamos los campos

    if(email == ""){
        document.getElementById('email_alert').classList.remove('d-none');
        is_empty = true;
    }
    if(password == ""){
        document.getElementById('password_alert').innerHTML = '<i class="fa fa-warning"></i> El campo Contraseña está vacio.';    
        document.getElementById('password_alert').classList.remove('d-none');
        is_empty = true;
    }

    if(is_empty){
        setTimeout(()=>{
            
            document.getElementById('email_alert').classList.add('d-none');
            document.getElementById('password_alert').classList.add('d-none');  
            
        },1000);
    }

    //enviamos los datos para la API
    if(is_empty == false){
        loader(true);
        fetch(CURL+'login/',{
            method: 'POST',
            headers: {
                "Accept" : "application/json",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                email: email,
                password: password
            })
        })
        .then(response => response.json())
        .then((json) =>{
            console.log("Response server.");

            //Cuando es 0 la repsuesta fue incorrecta
            if(json.type_response == 0){
                loader(false);
                document.getElementById('responseServe').classList.remove('d-none');
                setTimeout(()=>{       
                    document.getElementById('responseServe').classList.add('d-none');
                },2000);
                formRegister.email_form.value =  "";
                formRegister.password_form.value =  "";
            }

            //Cuando es 1 la repsuesta es correcta
            if(json.type_response == 1){
                console.log("Has iniciado Sesion");
                location.href = PAGE + "auth.php?access_token="+json.accessToken+"&&UserID="+json.user.id;
            }
        });
    }

});