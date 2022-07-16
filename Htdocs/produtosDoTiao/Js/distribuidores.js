let voltar = () => {
	window.location.href = 'distribuidores.php'
}

let recuperaDistribuidoresEstado = (uf) => {
	window.location.href = 'distribuidores.php?uf=' + uf 
}

let recuperaDistribuidoresCidade = (cidade, estado) => {
	window.location.href = 'distribuidores.php?cidade=' + cidade 
}

let paginacao = (id) => {

	let indice = 'letra' + id
	let cidade = document.getElementById('cidade').innerHTML
					
	let letra = document.getElementById(indice).innerHTML 
				
	window.location.href = 'distribuidores.php?letra=' + letra + '&cidade=' + cidade
}

let proximo = () => {

	document.getElementById('letra1').innerHTML = 'n'
	document.getElementById('letra2').innerHTML = 'o'
	document.getElementById('letra3').innerHTML = 'p'
	document.getElementById('letra4').innerHTML = 'q'
	document.getElementById('letra5').innerHTML = 'r'
	document.getElementById('letra6').innerHTML = 's'
	document.getElementById('letra7').innerHTML = 't'
	document.getElementById('letra8').innerHTML = 'u'
	document.getElementById('letra9').innerHTML = 'v'
	document.getElementById('letra10').innerHTML = 'w'
	document.getElementById('letra11').innerHTML = 'x'
	document.getElementById('letra12').innerHTML = 'y'
	document.getElementById('letra13').innerHTML = 'z'

}

let anterior = () => {
	document.getElementById('letra1').innerHTML = 'a'
	document.getElementById('letra2').innerHTML = 'b'
	document.getElementById('letra3').innerHTML = 'c'
	document.getElementById('letra4').innerHTML = 'd'
	document.getElementById('letra5').innerHTML = 'e'
	document.getElementById('letra6').innerHTML = 'f'
	document.getElementById('letra7').innerHTML = 'g'
	document.getElementById('letra8').innerHTML = 'h'
	document.getElementById('letra9').innerHTML = 'i'
	document.getElementById('letra10').innerHTML = 'j'
	document.getElementById('letra11').innerHTML = 'k'
	document.getElementById('letra12').innerHTML = 'l'
	document.getElementById('letra13').innerHTML = 'm'
}