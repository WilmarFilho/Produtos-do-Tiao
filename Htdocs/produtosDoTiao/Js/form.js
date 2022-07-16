
	$(document).ready(() => {
		$('#modal').modal('show')
	})

	let verificacampo = (label,value) => {
		let campo = document.getElementById(value).value
		if(campo.length > 6) {
			document.getElementById(label).innerHTML = 'campo valido'
			document.getElementById(label).className = 'text-success lead'
			document.getElementById(value).className = 'form-control custom-form-success'
		}
		if(campo.length < 7) {
			document.getElementById(label).innerHTML = 'campo invalido'
			document.getElementById(label).className = 'text-danger lead'
			document.getElementById(value).className = 'form-control custom-form-danger'
		}
	}
