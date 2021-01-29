new Vue({
	el:"#snack",
	vuetify: new Vuetify(),
	data:{
		snackbar: true,
		btn:{
			backgroundColor:"#E53935",
			marginRight:"1em",	
		},
	        text: 'Ha ocurrido un problema. Intenta en otro momento.',
		vertical: true,
	},
})
