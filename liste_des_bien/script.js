function verifierRecherche(){

let recherche = document.querySelector("input[name='recherche']").value;

if(recherche==""){

alert("Entrez un mot");

return false;

}

return true;
}


function ajouterFavori(){

let confirmation = confirm("Ajouter aux favoris ?");

if(confirmation){

return true;

}else{

return false;

}

}


window.onload = function(){

let cards = document.querySelectorAll(".card");

cards.forEach(function(card){

card.style.transform="scale(0.95)";

setTimeout(function(){

card.style.transition="0.3s";

card.style.transform="scale(1)";

},200);

});

}