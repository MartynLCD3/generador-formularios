new Vue({
	el:"#app",
	vuetify:new Vuetify(),
	data:{
		tab: null,
		formStyle:{
			width:"50%",
			margin:"7em auto"
		},
		link:{
			display:"block",
			textAlign:"center",
			color:"#fff",
			outline:"none",
			cursor:"pointer",
		
		},
		back:{
			backgroundImage:"url('../assets/img/background.png')",
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
			backgroundColor:"#009688",
		},	
		cardText:{
			margin:"auto",
			backgroundColor:"#004D40",
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
		emailRecover:'',
		passwordRegisterRules: [
        		v => !!v || 'Ingresa tu contraseña',
        		v => (v && v.length >= 10) || 'Mínimo 10 caracteres!',
		],
     		emailRegisterRules: [
        		v => !!v || 'Ingresa tu email',
        		v => /.+@.+\..+/.test(v) || 'Correo inválido',
		],	
	},
	methods: {
      		validate () {
        		this.$refs.form.validate()
      		},
		validateRegister () {
			this.$refs.formRegister.validate()
		},
		validateRecover () {
			this.$refs.formRecover.validate()	
		},
      	}
})
