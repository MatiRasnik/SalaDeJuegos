
    var puntos = 0;
    var r = 0;
    function iniciarJuego(){
    var dato1 = document.getElementById("difum");
    dato1.style.filter="blur(0px)"
     r = 1
    while(r<2){
         for(var i =0;i<3;i++){
                    var x = Math.floor(Math.random() * 10); 
                    var dato = document.getElementById(i.toString());
                    dato.dataset.valor=x;
                              }
        var va0 = document.getElementById("0").dataset.valor;
        var va1 = document.getElementById("1").dataset.valor;
        var va2 = document.getElementById("2").dataset.valor;
        if(va0==va1||va1==va2||va0==va2){
                      r = 1;
          }else{
                      r = 2;
    }
}
  }
  function elegirCarta(){
    if(r==2){
          var evento = window.event;           
          r++;
var valorCarta = evento.target.dataset.valor;
if(document.getElementById("0").dataset.valor==valorCarta){
          var CartaElegida = 0;
}else if(document.getElementById("1").dataset.valor==valorCarta){
          var CartaElegida = 1;
}else{
          var CartaElegida = 2;
}
var modalMostrar = true;
var cero = document.getElementById("0").dataset.valor;
var uno = document.getElementById("1").dataset.valor;
var dos = document.getElementById("2").dataset.valor;
var valorCartaElegida = document.getElementById(CartaElegida.toString()).dataset.valor;
var valorCartaElegida2 = parseInt(valorCartaElegida);
var uno2 = parseInt(uno);
var dos2 = parseInt(dos);
var cero2 = parseInt(cero);
var cambiarElegida = document.getElementById(CartaElegida.toString());
var cambiarElegida0 = document.getElementById("0");
var cambiarElegida1 = document.getElementById("1");
var cambiarElegida2 = document.getElementById("2");
cambiarElegida.style.backgroundImage="url('fondo.jpg')";

if(CartaElegida==0){
  cambiarElegida.innerHTML=+valorCartaElegida2;
  cambiarElegida1.innerHTML=+uno;
  cambiarElegida2.innerHTML=+dos;
  setTimeout(carta0, 2000)
  function carta0(){
    cambiarElegida1.style.backgroundImage="url('fondo.jpg')"
    cambiarElegida2.style.backgroundImage="url('fondo.jpg')"
  }
}
if(CartaElegida==1){
  cambiarElegida.innerHTML=+valorCartaElegida2;
  cambiarElegida0.innerHTML=+cero;
  cambiarElegida2.innerHTML=+dos;
  setTimeout(carta0, 2000)
  function carta0(){
    cambiarElegida0.style.backgroundImage="url('fondo.jpg')"
    cambiarElegida2.style.backgroundImage="url('fondo.jpg')"

  }
}
if(CartaElegida==2){
  cambiarElegida.innerHTML=+valorCartaElegida2;
  cambiarElegida0.innerHTML=+cero;
  cambiarElegida1.innerHTML=+uno;
  setTimeout(carta0, 2000)
  function carta0(){
    cambiarElegida0.style.backgroundImage="url('fondo.jpg')"
    cambiarElegida1.style.backgroundImage="url('fondo.jpg')"

  }
}
 if(valorCartaElegida2>=uno2){
    if(valorCartaElegida2>=dos2){
      if(valorCartaElegida2>=cero2){
          puntos = puntos + 100;   
          modalMostrar = false;
       }
      }
     }
     setTimeout(resultado, 3000)
     function resultado(){
       if(modalMostrar==false){
         var ganar = document.getElementById("ganar");
          ganar.style.display="block";
       }else{
          var perder = document.getElementById("perder");
          perder.style.display="block"
       } 
document.getElementById("puntaje").innerHTML="Puntos: " +puntos;
 r=1;   
    }
    setTimeout(normal, 4000)
    function normal(){
      cambiarElegida0.style.backgroundImage="url('carta.jpg')"
      cambiarElegida1.style.backgroundImage="url('carta.jpg')"
      cambiarElegida2.style.backgroundImage="url('carta.jpg')"
    }
  }   
}   
  function cerarmodal1(){
    var ganar = document.getElementById("ganar");
    ganar.style.display="none";
  }   

  function cerarmodal2(){
    var ganar = document.getElementById("perder");
    ganar.style.display="none";
  }
  function makeUnselectable(node) {
    if (node.nodeType == 1) {
        node.setAttribute("unselectable", "on");
    }
    var child = node.firstChild;
    while (child) {
        makeUnselectable(child);
        child = child.nextSibling;
    }
}

makeUnselectable(document.getElementById("foo"));