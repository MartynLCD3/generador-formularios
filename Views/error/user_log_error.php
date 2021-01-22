<div id="snack">
		<v-snackbar
			v-model="snackbar"
      			:vertical="vertical"
    		>
      			{{ text }}

      			<template v-slot:action="{ attrs }">
        			<v-btn
          				dark
          				text
          				v-bind="attrs"
          				@click="snackbar = false"
        			>
          				Cerrar
       				</v-btn>
      			</template>
    		</v-snackbar>
</div>
<script src="../assets/js/msg.log.js"></script>
