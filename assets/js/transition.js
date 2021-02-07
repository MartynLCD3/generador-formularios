function init(){	

	const visualizer = document.getElementById("visualizer")
	const app = document.getElementById("app")

	setTimeout(function(){
		app.style.display = "none"
		visualizer.style.display = "block"

	},3000)
}

new Vue({
	el:"#app",
	vuetify:new Vuetify(),
	data:{
		bar:{
			width:"200px",	
			display:"block",
			margin:"10em auto",
		},	
	},
})

window.addEventListener("load",init,false)
