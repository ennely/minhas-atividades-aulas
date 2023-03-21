function buTt(){
    document.getElementById("idimg").src="./pic_bulbon(1).gif"
}

function othEr(){
    document.getElementById("idimg").src="./pic_bulboff222.gif"
}


const input = document.querySelector("input");
const button = document.querySelector("#show");
button.addEventListener('click', togglePass);


function togglePass() {
  if (input.type == "password") {
    input.type = "text";
    button.textContent = "ocultar";
  } else {
    input.type = "password";
    button.textContent = "mostrar";
  }
}
