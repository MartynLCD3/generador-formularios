new Vue({
	el:"#snack",
	vuetify: new Vuetify(),
	data:{
		btn:{
			backgroundColor:"#E53935",
			marginRight:"1em",
		},
		snackbar: true,
	        text: 'No se ha podido generar el registro. Intente nuevamente.',
		vertical: true,
	},
})
