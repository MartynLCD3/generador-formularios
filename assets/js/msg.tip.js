new Vue({
	el:"#snack",
	vuetify: new Vuetify(),
	data:{
		btn:{
			backgroundColor:"#FF5722",
			marginRight:"1em",
		},
		snackbar: true,
	        text: 'Tip: Las casillas vacías complétalas con un guión.',
		vertical: true,
	},
})
