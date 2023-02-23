const pokedex = () => {

	const Pegaurlid = id =>`https://pokeapi.co/api/v2/pokemon/${id}`

	const pokemonpromises = []

	for (var i = 152; i <= 251; i++) {

		pokemonpromises.push(fetch(Pegaurlid(i)).then(response => response.json()))
	}

	Promise.all(pokemonpromises)

	.then(pokemons => {
		const lispokemon = pokemons.reduce((accumulator, pokemon) => {
			const types = pokemon.types.map(typeInfo => typeInfo.type.name)

			accumulator += `
				<li class="card ${types[0]}">
					<img class="card-image " alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/${pokemon.id}.png" />
					<h2 class="card-title">${pokemon.id}. ${pokemon.name}</h2>
					<p class="card-subtitle">${types.join(' | ')}</p>

				</li>
			`
			return accumulator
		},'')


		const ul = document.querySelector('[data-js="pokedex"]')
		ul.innerHTML = lispokemon

		console.log(ul)
	
	})
	
}

pokedex()
	