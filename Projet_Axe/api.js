var typeEner = {
    normal: 'img/energie/basic.png',
    fighting: 'img/energie/fight.png',
    poison : 'img/energie/psy.png',
    ground : 'img/energie/fight.png',
    rock : 'img/energie/fight.png',
    bug : 'img/energie/plant.png',
    ghost : 'img/energie/psy.png',
    steel : 'img/energie/steel.png',
    fire : 'img/energie/fire.png',
    water : 'img/energie/water.png',
    grass : 'img/energie/plant.png',
    electric : 'img/energie/elektrik.png',
    psychic : 'img/energie/psy.png',
    ice : 'img/energie/water.png',
    dragon : 'img/energie/dragon.png',
    dark : 'img/energie/dark.png',
    fairy : 'img/energie/fairy.png',
};




fetch('https://pokeapi.co/api/v2/pokemon')
    .then(response => response.json())
    .then((data) => {
        console.log(data);
    })


// recuperer les data d'un pokemon 
async function fetchPokemon(pokemon) {
    const response = await fetch('https://pokeapi.co/api/v2/pokemon/' + pokemon);
    return await response.json();
}






async function displayPokemonName(pokemon, where) {
    const data = await fetchPokemon(pokemon);
        where.innerHTML = `
        <h3 class="nom">${data.name.charAt(0).toUpperCase() + data.name.slice(1)}</h3>
        <div class="health">
            <h6 class="">HP</h6>
            <h3 class="">70</h3>
            <img src="${typeEner[data.types[0].type.name]}" alt="" class="energie">
        </div>
        `;
}

// Afficher le nom et l'energie du pokemon dans la carte
var cartes = document.querySelectorAll('.headInfo');

cartes.forEach(element => {
    displayPokemonName(element.parentElement.id, element);
});


