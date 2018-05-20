<template>
	<div class="container">
		<form class="text-center">
			<label><h1>Datos</h1></label>
			<div class="form-group">
				<input class="form-control" type="text" name="" placeholder="Nombre" v-model="form.Nombre">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="" placeholder="DNI" v-model="form.DNI">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="" placeholder="Edad" v-model="form.Edad">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="" placeholder="E-mail" v-model="form.Email">
			</div>
			<button type="button" class="btn btn-info" v-on:click="Enviar">Enviar</button>
		</form>

		<div>
			
		</div>
	</div>
</template>

<script type="text/javascript">
	import axios from 'axios'
	export default {
	  data () {
	    return {
	    	form: {
	    		Nombre: '',
	    		DNI: '',
	    		Edad: '',
	    		Email: ''
	    	}
	    }
	  },
	  methods: {
	  	Enviar () {

	  		console.log (this.form)

	  		axios.post('/api/alumno', this.form) 
	  			.then(res => {
	  				console.log(res.data)
	  			})
	  			.catch(err => {

	  			})
	  	}
	  }
	}
</script>
</script>
