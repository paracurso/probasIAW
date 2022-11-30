var VARIETY = ['Geisha', 'Pacamara', 'Bourbon']
var GRAIN = ['Arabica', 'Robusta'] 
var ROAST = ['Oscuro', 'Medio', 'Ligero']
var DESCA = [null,'Desca natural', 'Desca quimico', 'Desca al agua']

function createRecommend() {
  var recomend = [];
  var i = 6;
  while (i > 0) {
    var v = VARIETY[Math.floor(Math.random() * VARIETY.length)];
    var g = GRAIN[Math.floor(Math.random() * GRAIN.length)];
    var r = ROAST[Math.floor(Math.random() * ROAST.length)];
    var d = DESCA[Math.floor(Math.random() * DESCA.length)];
    var c = `Cafe ${v} ${g} ${r}`;
    if(d) { c = c + ' ' + d};
    if(!recomend.includes(c)) {
        recomend.push(c);
        i--;
    }
  }
  return recomend
}

var recomendados = createRecommend()

var LISTA = document.getElementById("lista_productos")
for (var i = 0;  i < recomendados.length; i++){
    var div = document.createElement("div")
        div.classList.add("producto")
    var img = document.createElement("img")
        img.src = "./resources/images/cafe_image.jpg"
        img.alt = recomendados[i]
        img.title = recomendados[i]

    var a = document.createElement("a")
        a.href = "pedido.html"
        a.innerText = recomendados[i] + " (" +  Math.floor(Math.random() * (1000 - 100) + 100) / 100 + "€/Kg.)  "
    div.appendChild(img)
    div.appendChild(a)
    LISTA.appendChild(div)
}

var VARIEDAD = document.getElementById("variedad")
for (var i = 0 ; i < VARIETY.length ; i++){
    var option = document.createElement("option")
    option.innerText = VARIETY[i]
    option.value = VARIETY[i]
    if(i == 0) option.selected = true
    VARIEDAD.appendChild(option)
}


var GRANO = document.getElementById("grano")
for (var i = 0 ; i < GRAIN.length ; i++){
    var option = document.createElement("option")

    option.innerText = GRAIN[i]
    option.value = GRAIN[i]
    if(i == 0) option.selected = true
    GRANO.appendChild(option)
}

var TUESTE = document.getElementById("tueste")
for (var i = 0 ; i < ROAST.length ; i++){
    var option = document.createElement("option")

    option.innerText = ROAST[i]
    option.value = ROAST[i]
    if(i == 0) option.selected = true
    TUESTE.appendChild(option)
}


var DESCAF = document.getElementById("DESCA")
for (var i = 0 ; i < DESCA.length ; i++){
    var option = document.createElement("option")
    var tipo = DESCA[i]
    if(tipo == null){
        tipo = '...'
    }
    option.innerText = tipo
    option.value = tipo
    if(i == 0) option.selected = true
    DESCAF.appendChild(option)
}


function filtro(event){
    event.preventDefault()
    var formdata = new FormData(document.getElementById("formulario"))
    var propiedades = Object.fromEntries(formdata)
    var c = `Cafe ${propiedades.var_cafe} ${propiedades.grano} ${propiedades.tueste}`;
    if(propiedades.descafeinado != "...") { c = c + ' ' + propiedades.descafeinado};
    LISTA.innerHTML = ''

        var div = document.createElement("div")
        div.classList.add("producto")
    var img = document.createElement("img")
        img.src = "./resources/images/cafe_image.jpg"
        img.alt = c
    var a = document.createElement("a")
        a.href = "pedido.html"
        a.innerText = c

    div.appendChild(img)
    div.appendChild(a)
    LISTA.appendChild(div)

}