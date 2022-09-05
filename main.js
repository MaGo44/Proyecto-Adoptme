
//Barra de valores de la edad
var slider = document.getElementById("RangoEdad");
var output = document.getElementById("ValorEdad");
output.innerHTML = slider.value; // Display the default slider value

slider.oninput = function() {
  output.innerHTML = this.value;
}

//Coincidencia en la confirmacion de contraseña
function onChange() {
    const password = document.querySelector('input[name=contraseña]');
    const confirm = document.querySelector('input[name=contraseña2]');
    if (confirm.value === password.value) {
      confirm.setCustomValidity('');
    } else {
      confirm.setCustomValidity('Las contraseñas no coinciden');
    }
  }

//Formato de la tabla de lista de mascotas
const grid = new Muuri('.MascotaLista', {
	layout: {
      rounding: false
  }

});

//Animacion de carga de lista de mascotas
window.addEventListener('load', () => {
    grid.refreshItems().layout();
    document.getElementById('MascotaLista').classList.add('CargaImagen');

    //Intento de filtro de categoria
    const enla = document.querySelectorAll('#categ a');
    
    enla.forEach( (elemento) => {
      elemento.addEventListener('click', (evento) =>{
        evento.preventDefault();
        
        const categor = evento.target.innerHTML.toLowerCase();
        console.log(categor);
        if(categor == 'todos'){
          grid.filter('[data-categoria]');
        }else{
          if(categor == 'perro' || categor == 'gato'){
          grid.filter(`[data-categoria="${categor}"]`);
          }
          else if(categor == 'adulto' || categor == 'cachorro'){
          grid.filter(`[data-edad="${categor}"]`);
          }
          else{
            
            grid.filter(`[data-etiquetas="${categor}"]`);
          }
        }

        });


    }  );
});

function FiltraAdopcion(c){
    var x, i;
    x=document.getElementsByClassName("cardB");
    if(c=="all")c="";
    for(i=0;i<x.length;i++){
        removeClass(x[i],"show");
        if(x[i].className.indexOf(c)> -1) addClass(x[i],"show")
    }
}
function addClass(element, name){
    var i, arr1, arr2;
    arr1=element.className.split(" ");
    arr2=name.split(" ");
    for(i=0;i<arr2.length;i++){
        if(arr1.indexOf(arr2[i]) == -1){
            element.className += " " + arr2[i];
        }
    }
}

function removeClass(element, name){
    var i, arr1, arr2;
    arr1=element.className.split(" ");
    arr2=name.split(" ");
    for(i=0;i<arr2.length;i++){
        while(arr1.indexOf(arr2[i]) > -1){
            arr1.split(arr1.indexOf(arr2[i]),1);
        }
    }
    element.className=arr1.join(" ");
}

//Filtro para baja de mascotas
function searchFilter(){
    const input = document.querySelector('.cardB');
    const selector = document.querySelector('input[name=buscador]');
    document.addEventListener("keyup",e =>{
        if(e.target.matches(input)){
            document.querySelectorAll(selector).forEach((el) =>
                el.textContent.toLowerCase().includes(e.target.value)
                ? el.classList.remove("filter")
                : el.classList.add("filter")
            );
        }
    });
}

/*window.addEventListener('load', () => {
    grid.refreshItems().layout();
    document.getElementById('MascotaLista').classList.add('CargaImagen');
    
    document.getElementById('select').onclick=function(){
        const checkboxes=document.querySelectorAll('input[type="radio"]:checked');
        checkboxes.forEach((elemento) => {
            grid.filter(`[data-categoria="${elemento}"]`);
        });
    }
    
});*/

