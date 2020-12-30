const idPrefixo = "carta_";
let cartasArray = [];

function toggleActive(id) {
  const elemento = document.getElementById(id)

  elemento.classList.toggle("active");
}

function toggleCarta(cartaCodigo) {
  const cartaIndex = cartasArray.indexOf(cartaCodigo);

  if(cartaIndex === -1) {
    cartasArray.push(cartaCodigo);
    console.log(cartaCodigo + " adicionado");
  } else {
    cartasArray.splice(cartaIndex, 1);
    console.log(cartaCodigo + " removido");
  }
}

function onCartaClick(cartaCodigo) {
  toggleActive(idPrefixo + cartaCodigo)
  toggleCarta(cartaCodigo)
}

function sumbitDeckForm(){
  const cartasString = String(cartasArray);

  document.deckForm.cartas.value = cartasString;
  document.forms["deckForm"].submit();
}
