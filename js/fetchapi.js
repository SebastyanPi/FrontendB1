const FORM_FOOD = 'formFood';
const FORM_FOOD_NAME = 'name';
const FORM_FOOD_DESCRIPTION = 'description';
const FORM_FOOD_COUNT = 'count';
const FORM_FOOD_PRICE = 'price';
const FORM_FOOD_FILE = 'file';

const ALERT_FOOD_NAME = 'name_alert';
const ALERT_FOOD_DESCRIPTION = 'description_alert';
const ALERT_FOOD_COUNT = 'count_alert';
const ALERT_FOOD_PRICE = 'price_alert';
const ALERT_FOOD_FILE = 'file_alert';

const FORM_FOOD_INPUTS = document.getElementById(FORM_FOOD);
FORM_FOOD_INPUTS.addEventListener('submit',function(e){

    e.preventDefault();
    var errors = false;
    if(FORM_FOOD_INPUTS.name.value == ""){ 
        errors = true;
        document.getElementById(ALERT_FOOD_NAME).classList.remove('d-none');
    }
    if(FORM_FOOD_INPUTS.description.value == ""){
        errors = true;
        document.getElementById(ALERT_FOOD_DESCRIPTION).classList.remove('d-none');

    }
    if(FORM_FOOD_INPUTS.count.value == ""){
        errors = true;
        document.getElementById(ALERT_FOOD_COUNT).classList.remove('d-none');

    }
    if(FORM_FOOD_INPUTS.price.value == ""){
        errors = true;
        document.getElementById(ALERT_FOOD_PRICE).classList.remove('d-none');

    }
    /*if(FORM_FOOD_INPUTS.featured.value == ""){
        errors = true;
        document.getElementById(ALERT_FOOD_FILE).classList.remove('d-none');
    }*/

    if(errors == true){
        setTimeout(()=>{
            document.getElementById(ALERT_FOOD_NAME).classList.add('d-none');
            document.getElementById(ALERT_FOOD_DESCRIPTION).classList.add('d-none');
            document.getElementById(ALERT_FOOD_COUNT).classList.add('d-none');
            document.getElementById(ALERT_FOOD_PRICE).classList.add('d-none');
            //document.getElementById(ALERT_FOOD_FILE).classList.add('d-none');
        },2000);
    }

    if(errors == false){

        /*
        body: JSON.stringify({
                name: FORM_FOOD_INPUTS.name.value,
                description: FORM_FOOD_INPUTS.description.value,
                count: FORM_FOOD_INPUTS.count.value,
                featured: FORM_FOOD_INPUTS.file.value,
                price: FORM_FOOD_INPUTS.price.value,
                type:FORM_FOOD_INPUTS.typefood.value,
            })

        */

        document.getElementById('closeModal').click();    
        loader(true);
        let datas = {
            name: FORM_FOOD_INPUTS.name.value,
            description: FORM_FOOD_INPUTS.description.value,
            count: FORM_FOOD_INPUTS.count.value,
            price: FORM_FOOD_INPUTS.price.value,
            type:FORM_FOOD_INPUTS.typefood.value,
        };

     
        var tokenApi = 'Bearer ' + FORM_FOOD_INPUTS.token.value;
        fetch(CURL+'food/store/',{
            method: 'POST',
            headers: {
                "Accept" : "application/json",
                "Content-Type": "application/json",
                "Authorization": tokenApi,
            },
            body: JSON.stringify(datas)
        })
        .then(response => response.json())
        .then((json) =>{
            console.log(json);
            console.log("Response server.");
            if(json.type_response == 0){
                loader(false);
            }
            if(json.type_response == 1){
                console.log("Excelente");
                console.log(json);
            }

            AllPlatos();
            FORM_FOOD_INPUTS.name.value = '';
            FORM_FOOD_INPUTS.description.value = '';
            FORM_FOOD_INPUTS.count.value = '';
            FORM_FOOD_INPUTS.price.value = '';
            loader(false);
        });
    }
});


const AllPlatos = () =>{
    console.log();
    var tokenApi = 'Bearer ' + FORM_FOOD_INPUTS.token.value;
    fetch(CURL+'foods',{
        method: 'GET',
        headers: {
            "Accept" : "application/json",
            "Content-Type": "application/json",
            "Authorization": tokenApi,
        },
    })
    .then(response => response.json())
    .then((json) =>{
        /*console.log("Response server.");
        if(json.type_response == 0){
            loader(false);
        }
        if(json.type_response == 1){
            console.log("Excelente");
            console.log(json);
            
            //location.href = PAGE + "auth.php?access_token="+json.access_token+"&&UserID="+json.data.id;
        }*/

        document.getElementById('filltable').innerHTML = '';
        var data = '';

        json.forEach(item => {

            var role = '';
            switch(item.type){
                case 'desayuno' :
                    role = 'admin';
                    break;
                case 'almuerzo' :
                    role = 'user';
                    break;
                case 'cena' :
                    role = 'member';
                    break;    
            }

            console.log(item);
            data += '<tr>';
                data += '<td><span class="block-email">'+item.name+'</span></td>';
                data += '<td>'+item.description+'</td>';
                data += '<td class="text-center">'+item.count+'</td>';
                data += '<td class="text-center"><b>$'+item.price+'</b></td>';
                data += '<td class="text-center"><span class="role '+role+'">'+item.type+'</span></td>';
            data += '</tr>';
        });

        document.getElementById('filltable').innerHTML = data;

        console.log(json);
    });
}
AllPlatos(); 