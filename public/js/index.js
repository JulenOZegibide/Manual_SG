let botonmenu = document.getElementById('menubutton');
let contador = 0;
botonmenu.addEventListener("click", function(){
    contador++;
    var element = document.getElementById("menulateral");
    if(contador % 2 == 0){
        element.classList.remove("ocultar");
        element.classList.add("mostrar");
    }else {

        element.classList.remove("mostrar");
        element.classList.add("ocultar");
    }

});
