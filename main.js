
function fadeOutEffect(idSubtipo, ...elemets){
    var  subtipeElemet = document.getElementById(idSubtipo);

    for(var i = 0; i < subtipeElemet.clientHeight; i++){
       try{
        if(subtipeElemet[i].value != undefined && subtipeElemet[i].value != ""){
            for(var j = 0; j < elemets.length; j++){
                if(subtipeElemet[i].value == elemets[j]){
                    subtipeElemet[i].style.display = "none";
                }
            }
        }
       } catch(e){
           break;
       }
    }
}

function fadeInEffect(idSubtipo, ...elemets){
    var elementSelected = document.getElementById(idSubtipo);
    for(var i = 0 ; i < elementSelected.length; i++){
        try{
            if(elementSelected[i].value != undefined && elementSelected[i].value != ""){
                for(var j = 0; j < elemets.length; j++){
                    if(elementSelected[i].value == elemets[j]){
                        elementSelected[i].style.display = "block";
                    }
                }
            }
        }catch(e){
            break;
        }
    }
}
//************************** */
//Extraccion del html

// Grupos
let secondTipoSelect = document.getElementById("subtipo");


// TAlleres con Grupos
let tipoSelect = document.getElementById("taller");


tipoSelect.addEventListener("change" , event => {
    let tallerElementSelected = tipoSelect.options[tipoSelect.selectedIndex].value;
    // taller
    console.log(tallerElementSelected);
    
    //let grupoElementSelected = 
    switch(tallerElementSelected){
        case 'Taller de Acuarela':
            
            
            fadeInEffect("subtipo", "G-1","G-2","G-3")
            fadeOutEffect("subtipo", "G-4")
            //intentando reestablecer los inputs
            //secondTipoSelect.options[secondTipoSelect.selectedIndex].value.innerHTML = "Seleccione un Grupo"
            break;
        case 'Taller de Retratos':

            fadeInEffect("subtipo", "G-1")
            fadeOutEffect("subtipo", "G-2", "G-3", "G-4")
            
            break;
        case 'Taller de Dibujo':

            fadeInEffect("subtipo", "G-1")
            fadeOutEffect("subtipo", "G-2", "G-3", "G-4")   

            break;
        default:
            alert('No has seleccionado una opcion');
            break;
    }
});


//Grupos con Horarios
 



    secondTipoSelect.addEventListener("change" , event => {
        
        let grupoElementSelected = secondTipoSelect.options[secondTipoSelect.selectedIndex].value;
        
        console.log(grupoElementSelected);//Grupo
        switch(grupoElementSelected){
            case 'G-1':
                
                fadeInEffect("subtipo2", "8:00 a 9:00 AM","2:00 a 3:00 PM")
                fadeOutEffect("subtipo2", "9:30 a 11:00 AM","3:30 a 5:00 PM", "11:30 a 1:00 PM","5:30 a 7:00 PM")
    
                break;
            case 'G-2':
    
                fadeInEffect("subtipo2","9:30 a 11:00 AM","3:30 a 5:00 PM")
                fadeOutEffect("subtipo2","11:30 a 1:00 PM","5:30 a 7:00 PM","8:00 a 9:00 AM","2:00 a 3:00 PM")
                
                break;
            case 'G-3':
    
                fadeInEffect("subtipo2", "11:30 a 1:00 PM","5:30 a 7:00 PM")
                fadeOutEffect("subtipo2", "8:00 a 9:00 AM","2:00 a 3:00 PM","9:30 a 11:00 AM","3:30 a 5:00 PM")   
    
                break;
            default:
                alert('No has seleccionado una opcion');
                break;
        }
    });


// Grupo dependera del Dia 

horariosConfi = document.getElementById("subtipo2");

horariosConfi.addEventListener("change" , event => {    // grupo
    var grupoElementSelected = secondTipoSelect.options[secondTipoSelect.selectedIndex].value;
    console.log(grupoElementSelected);
    let horariosconfii =horariosConfi.options[horariosConfi.selectedIndex].value;
    console.log(horariosconfii); 
    switch(horariosconfii){
        case '8:00 a 9:00 AM':
            
            if(grupoElementSelected == "G-1"){
                
                fadeInEffect("subtipo3", "Martes y Jueves")
                fadeOutEffect("subtipo3", "Miercoles y Viernes")
            }
            break;
        case '2:00 a 3:00 PM':
            if(grupoElementSelected == "G-1"){
                
                fadeInEffect("subtipo3", "Martes y Jueves")
                fadeOutEffect("subtipo3", "Miercoles y Viernes");
            }
            break;
        case '9:30 a 11:00 AM':
                // Dias |
            if(grupoElementSelected == "G-2"){
                fadeInEffect("subtipo3", "Martes y Jueves")
                fadeOutEffect("subtipo3", "Miercoles y Viernes");       
            }
            break;

        case '3:30 a 5:00 PM':
                // Dias |
            if(grupoElementSelected == "G-2"){
                fadeInEffect("subtipo3", "Martes y Jueves")
                fadeOutEffect("subtipo3", "Miercoles y Viernes");       
            }
            break;
        case '11:30 a 1:00 PM':
                // Dias |
            if(grupoElementSelected == "G-3"){
                fadeInEffect("subtipo3", "Miercoles y Viernes")
                fadeOutEffect("subtipo3", "Martes y Jueves");       
            }
            break;
        case '5:30 a 7:00 PM':
                // Dias |
            if(grupoElementSelected == "G-3"){
                fadeInEffect("subtipo3", "Martes y Jueves")
                fadeOutEffect("subtipo3", "Miercoles y Viernes");      
            }
            break;

        default:
            alert('No has seleccionado una opcion');
            break;
    }
});

