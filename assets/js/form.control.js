new Vue({
	el:"#app",
	vuetify:new Vuetify(),
	data:{
		tab: null,
		formStyle:{
			width:"50%",
			margin:"7em auto"
		},
		back:{
			backgroundImage:"url('../assets/img/background.jpg')",
			backgroundPosition:"center center",
			backgrounRepeat:"no-repeat",
			backgroundAttachment:"fixed",
			backgroundSize:"cover",
			backgroundColor:"#004D40"
		},
		box:{
			textAlign:"center",
			marginTop:"1em"
		},
		footer:{
			position:"fixed",
			bottom:"0",
			width:"100%",		
		},	
		cardText:{
			margin:"auto",
			backgroundColor:"inherit",
		},	
		valid: true,
		username: '',
		userRules: [
			v => !!v || 'Ingresa un nombre de usuario',
		],
    		password: '',
      		passwordRules: [
        		v => !!v || 'Ingresa tu contraseña',
        		v => (v && v.length >= 10) || 'Mínimo 10 caracteres!',
		],
		email: '',
     		emailRules: [
        		v => !!v || 'Ingresa tu email',
        		v => /.+@.+\..+/.test(v) || 'Correo inválido',
		],
		emailRegister: '',
		passRegister: '',	
	},
	methods: {
      		validate () {
        		this.$refs.form.validate()
      		},
      	}
})
