<?php
	include "./Config/Location.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="refresh" content="900">
		<meta name="copyright" content="©2050">
       		<meta name="viewport" 
		content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="google" content="nositelinkssearchbox">	
       		<meta name="google" content="notranslate">
       		<meta name="robots" content="index, nofollow">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">	
 		<link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
		<title>Generador de Encuestas - <?php echo $title_html ?></title>
	</head>
	<body>
		<main>
		<div id="header">
			<v-app>
				<v-card>
    					<v-tabs
						v-model="tab"
      						background-color="success"
					        dark
   					>
      						<v-tab>
        						saludo
						</v-tab>
						<v-tab>
							despedida
						</v-tab>
   					</v-tabs>
    					<v-tabs-items v-model="tab">
      						<v-tab-item>
       							<v-card flat>
          							<v-card-text>Hola</v-card-text>
							</v-card>	
						</v-tab-item>
						<v-tab-item>
							<v-card flat>
								<v-card-text>chau</v-card-text>
							</v-card>
						</v-tab-item>
    					</v-tabs-items>
				</v-card>
			</v-app>
		</div>
		<script>
			new Vue({
				el:"#header",
				vuetify:new Vuetify(),
    				data:{
        				tab: null,
				      }
				})
		</script>
