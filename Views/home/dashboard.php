<div id="app">
	<v-app :style="background"
	       dark
	>
		<v-app-bar
      			fixed
		        color="red darken-3"
			dark
			shrink-on-scroll	
		>
			<v-app-bar-title>{{ title }}</v-app-bar-title>
			<v-spacer></v-spacer>	
			<v-btn icon>
				<v-icon 
					size="30" 
					title="salir"
					@click="logOut"
				>
					mdi-exit-run
				</v-icon>
			</v-btn>
		</v-app-bar>
		<v-form
			v-model="valid"
			ref="form"
			:style="form"
			dark
			autocomplete="off"
			method="POST"
			lazy-validation
  		>
    			<v-text-field
				v-model="firstQuestion"
				:rules="questionRules"
				:counter="60"
				label="Pregunta N°1"
				placeholder="¿Cómo se llama el satélite natural de la Tierra?"	
				required
				autofocus
				name="question-one"
			></v-text-field>
				 <v-container>
      					<v-row>
       						<v-col
          						cols="12"
          						md="4"
        					>
          						<v-text-field
								:counter="30"
								label="Respuesta A"
								placeholder="Mercurio"
								required
								name="question-one-a"
          						></v-text-field>
        					</v-col>
        					<v-col
          						cols="12"
          						md="4"
        					>
          						<v-text-field
							        :counter="30"
								label="Respuesta B"
								placeholder="Luna"
								required
								name="question-one-b"
						        ></v-text-field>
        					</v-col>
						        <v-col
          						cols="12"
          						md="4"
					        >
							<v-text-field
								:counter="30"
								label="Respuesta C"
								placeholder="Marte"
								required
								name="question-one-c"
          						></v-text-field>
        					</v-col>
      					</v-row>
			</v-container>
			<v-progress-linear
				color="pink darken-4"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°2"
				placeholder="¿Cuál es el idioma de tú país natal?"	
				required
				name="question-two"
			></v-text-field>
			 <v-container>
				<v-row>
       					<v-col
        					cols="12"
        					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							placeholder="Español"
							name="question-two-a"
          						></v-text-field>
        					</v-col>
        					<v-col
          						cols="12"
          						md="4"
        					>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							placeholder="English"
							name="question-two-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							placeholder="中文"
							name="question-two-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>	
			<v-progress-linear
				color="red darken-2"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°3"	
				required
				name="question-three"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-three-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-three-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-three-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
			<v-progress-linear
				color="light-green darken-3"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°4"	
				required
				name="question-four"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-four-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-four-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-four-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
			<v-progress-linear
				color="amber"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°5"	
				required
				name="question-five"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-five-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-five-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-five-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
				<v-progress-linear
				color="pink lighten-2"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°6"	
				required
				name="question-six"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-six-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-six-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-six-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>	
				<v-progress-linear
				color="cyan lighten-3"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°7"	
				required
				name="question-seven"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-seven-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-seven-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-seven-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
				<v-progress-linear
				color="deep-orange"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°8"	
				required
				name="question-eight"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-eight-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-eight-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-eight-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
				<v-progress-linear
				color="brown darken-4"
				rounded
				:style="linear"
			        value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°9"	
				required
				name="question-nine"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-nine-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-nine-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-nine-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
				<v-progress-linear
				color="teal darken-4"
				rounded
				:style="linear"
				value="100"	
   			></v-progress-linear>
			<v-text-field
	      			:counter="60"
				label="Pregunta N°10"	
				required
				name="question-ten"
			></v-text-field>
			 <v-container>
      				<v-row>
       					<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
            						:counter="30"
            						label="Respuesta A"
							required
							name="question-ten-a"
          					></v-text-field>
        				</v-col>
        				<v-col
          					cols="12"
          					md="4"
        				>
          					<v-text-field
						        :counter="30"
						        label="Respuesta B"
							required
							name="question-ten-b"
					        ></v-text-field>
        				</v-col>
				        <v-col
          					cols="12"
          					md="4"
				        >
						<v-text-field
							:counter="30"
                   					label="Respuesta C"
							required
							name="question-ten-c"
          					></v-text-field>
        				</v-col>
      				</v-row>
			</v-container>
			<v-progress-linear
				color="success"
				rounded
				:style="linear"
			        value="100"	
			></v-progress-linear>
			<v-btn
		  	      color="warning"
			      class="mr-4"
			      @click="reset"
    			>
      				resetear
			</v-btn>
			<v-btn
				:disabled="!valid"
				color="success"
				class="mr-4"
				@click="validate"
				name="submit"
				type="submit"
			>
      				continuar
    			</v-btn>	
		</v-form>
	</v-app>	
</div>

<script>
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
			backgroundColor:"rgba(255,255,255,.6)",
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
	},
	methods:{
		logOut() {
			const url = "http://localhost:8000/"
			window.location.href = url + "Controllers/Logout.php"	
		},
		validate() {
        		this.$refs.form.validate()
      		},
		reset() {
        		this.$refs.form.reset()
      		},	
	}
})
</script>
