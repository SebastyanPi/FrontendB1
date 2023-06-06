const formRegister = document.getElementById('formRegister');
document.getElementById('formRegister').addEventListener('submit',function(e){
    e.preventDefault(); //Detener el evento
    
    //Obtenemos los valores
    const name = formRegister.name_form.value;
    const email = formRegister.email_form.value;
    const password = formRegister.password_form.value;
    
    //variable que determina si hay un campo vacio
    var is_empty = false;

    //Validamos los campos
    if(name == ""){
        document.getElementById('name_alert').classList.remove('d-none');
        is_empty = true;
    }
    if(email == ""){
        document.getElementById('email_alert').classList.remove('d-none');
        is_empty = true;
    }
    if(password == ""){
        document.getElementById('password_alert').innerHTML = '<i class="fa fa-warning"></i> El campo Contraseña está vacio.';    
        document.getElementById('password_alert').classList.remove('d-none');
        is_empty = true;
    }
    if(password.length > 1 && password.length < 8){
        document.getElementById('password_alert').innerHTML = '<i class="fa fa-warning"></i> La contraseña debe tener minimo 8 caracteres.';
        document.getElementById('password_alert').classList.remove('d-none');
        is_empty = true;
    }

    if(is_empty){
        setTimeout(()=>{
            
            document.getElementById('name_alert').classList.add('d-none');
            document.getElementById('email_alert').classList.add('d-none');
            document.getElementById('password_alert').classList.add('d-none');  
            
        },1000);
    }

    //enviamos los datos para la API
    if(is_empty == false){
        loader(true);
        fetch(CURL+'register/',{
            method: 'POST',
            headers: {
                "Accept" : "application/json",
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                name: name,
                email: email,
                password: password
            })
        })
        .then(response => response.json())
        .then((json) =>{
            console.log("Response server.");
            if(json.type_response == 0){
                loader(false);
            }
            if(json.type_response == 1){
                console.log("Has iniciado Sesion");
                location.href = PAGE + "auth.php?access_token="+json.accessToken+"&&UserID="+json.data.id;
            }
        });
    }

});