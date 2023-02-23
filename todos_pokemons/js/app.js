const pokedex = () => {

	const Pegaurlid = id =>`https://pokeapi.co/api/v2/pokemon/${id}`

	const pokemonpromises = []

	for (var i = 1; i <= 151; i++) {

		pokemonpromises.push(fetch(Pegaurlid(i)).then(response => response.json()))
	}

	Promise.all(pokemonpromises)

	

	.then(pokemons => {
		const lispokemon = pokemons.reduce((accumulator, pokemon) => {
			const types = pokemon.types.map(typeInfo => typeInfo.type.name)
		
			var src = 0
			for (var i = 1; i <= 151; i++) {
				
				src = pokemon.id
				

				if(src <= 9){
					accumulator += `
							<li class="card ${types[0]}">
								<img class="card-image " alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/00${pokemon.id}.png" />
								<a href="js/poke/pokemon${pokemon.id}.php" ><h2 class="card-title">${pokemon.id}. ${pokemon.name}</h2></a>
								<p class="card-subtitle">${types.join(' | ')}</p>
							
							</li>
						`
						
						return accumulator
						console.log(src)
				}else if(src > 9 && src <= 99 ){

					accumulator += `
							<li class="card ${types[0]}">
								<img class="card-image " alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/0${pokemon.id}.png" />
								<a href="js/poke/pokemon${pokemon.id}.php"><h2 class="card-title">${pokemon.id}. ${pokemon.name}</h2></a>
								<p class="card-subtitle">${types.join(' | ')}</p>

							</li>
						`
						
						return accumulator
				}else{
					accumulator += `
							<li class="card ${types[0]}">
								<img class="card-image " alt="${pokemon.name}" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/${pokemon.id}.png" />
								<a href="js/poke/pokemon${pokemon.id}.php"><h2 class="card-title">${pokemon.id}. ${pokemon.name}</h2></a>
								<p class="card-subtitle">${types.join(' | ')}</p>
								

							</li>
						`
						
						return accumulator
				}
				
			}
					
				},'')
		


		const ul = document.querySelector('[data-js="pokedex"]')
		ul.innerHTML = lispokemon



	
	})
	
}

pokedex()
	