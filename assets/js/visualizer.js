new Vue({
	el:"#visualizer",
	vuetify: new Vuetify(),
	data:{
		title:"Resultados",
		background:{
			backgroundImage:"url('https://cdn.vuetifyjs.com/images/parallax/material2.jpg')",
			backgroundPosition:"center center",
			backgrounRepeat:"no-repeat",
			backgroundAttachment:"fixed",
			backgroundSize:"cover",
			backgroundColor:"#004D40",
		},
	},
	methods:{
		logOut() {
			const url = "http://localhost:8000/"
			window.location.href = url + "v1/logout"	
		},
	},
})
