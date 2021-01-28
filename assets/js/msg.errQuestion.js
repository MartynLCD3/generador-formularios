new Vue({
	el:"#snack",
	vuetify: new Vuetify(),
	data:{
		snackbar: true,
		btn:{
			backgroundColor:"#E53935",
			marginRight:"1em",	
		},
	        text: 'Haz ingresado más caracteres de lo permitido. Intente nuevamente.',
		vertical: true,
	},
})
