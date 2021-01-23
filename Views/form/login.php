<div id="app">
	<v-app :style="back">
		<v-card>
    			<v-tabs
				v-model="tab"
      				background-color="#009688"
			        dark
   			>
      				<v-tab>
        				Ingresar
				</v-tab>
				<v-tab>
					Registrarse
				</v-tab>
   			</v-tabs>
			<v-tabs-items dark v-model="tab">
				<v-tab-item>
       					<v-card flat>
						<v-form
							ref="form"
							v-model="valid"
							lazy-validation
							autocomplete="off"	
							:style="formStyle"
							method="post"
  						>	
   							<v-text-field
							      	v-model="email"
     							      	:rules="emailRules"
							     	label="E-mail"
							      	name="email"
      							      	required
							></v-text-field>
							<v-text-field
      								v-model="password"		
							        :rules="passwordRules"
								label="Contraseña"
								type="password"
								name="password"
							        required
							></v-text-field>
							<div :style="box">
  								<v-btn
      									:disabled="!valid"
      									color="success"
									class="mr-4"
									name="send"
									@click="validate"
									type="submit"
    								>
      									Acceder
	   	 						</v-btn>	
							</div>
						  </v-form>					
					</v-card>	
				</v-tab-item>
				<v-tab-item>
					<v-card flat>
						<v-form
							ref="form"
							v-model="valid"
							lazy-validation
							autocomplete="off"	
							:style="formStyle"
							method="post"
						>	
							<v-text-field
								v-model="username"
								:counter=10
     							      	:rules="userRules"
							     	label="Nombre de usuario"
							      	name="username"
      							      	required
							></v-text-field>
   							<v-text-field
							      	v-model="emailRegister"
     							      	:rules="emailRegisterRules"
							     	label="E-mail"
							      	name="email"
      							      	required
							></v-text-field>
							<v-text-field
      								v-model="passRegister"		
							        :rules="passwordRegisterRules"
								label="Contraseña"
								type="password"
								name="password"
							        required
							></v-text-field>
							<div :style="box">
  								<v-btn
      									:disabled="!valid"
      									color="success"
									class="mr-4"
									name="send-register"
									@click="validate"
									type="submit"
    								>
      									Registrarse
	   	 						</v-btn>	
							</div>
						  </v-form>		
					</v-card>
				</v-tab-item>
			</v-tabs-items>
		</v-card>
		<v-footer :style="footer" dark class="#009688">
			<v-card :style="cardText">
				<v-card-text>
					<strong>Generador de Formularios - Martyn Castagno</strong>
				</v-card-text>
			</v-card>
		</v-footer>
	</v-app>
</div>
<script src="../assets/js/form.control.js"></script>
