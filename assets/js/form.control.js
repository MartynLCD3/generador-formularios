new Vue({
	el:"#app",
	vuetify: new Vuetify(),
	data:{
		valid:true,
		title:'Nuevo Formulario',
		firstQuestion:'',
		background:{
			backgroundImage:"url('https://cdn.vuetifyjs.com/images/parallax/material2.jpg')",
			backgroundPosition:"center center",
			backgrounRepeat:"no-repeat",
			backgroundAttachment:"fixed",
			backgroundSize:"cover",
			backgroundColor:"#004D40",
		},
		form:{
			margin:"10em auto 4em",
			width:"90%",
			padding:"3em",
			backgroundColor:"rgba(255,255,255,.7)",
			borderRadius:"2em",
			textAlign:"center",	
		},
		linear:{
			margin:"2em auto",
		},
		questionRules: [
			v => !!v || 'Formula mínimo 1 pregunta.',
		        v => (v && v.length <= 60) || 'Superaste el límite',
		],
		limitRules: [
			v => (v && v.length <= 60) || 'Completa correctamente este campo.',
		],
		answerRules: [
			v => !!v || 'Formula mínimo 2 respuestas.',
			v => (v && v.length <= 30) || 'Superaste el límite',
		],
		allRules: [
			v => (v && v.length <= 30) || 'Completa correctamente este campo.',
		],
	},
	methods:{
		logOut() {
			const url = "http://localhost:8000/"
			window.location.href = url + "v1/logout"
		},
		validate() {
        		this.$refs.form.validate()
      		},
		reset() {
        		this.$refs.form.reset()
      		},	
	}
})
