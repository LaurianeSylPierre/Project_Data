<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="view/style2.css"  media="screen,projection"/>
    <title>Formulaire</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<form>
				<fieldset>
					<legend>Nous contacter</legend>
					<input placeholder="Nom" type="text">
					<input placeholder="Prénom" type="text">
					<input placeholder="Pseudo" type="text">
					<input placeholder="Email" type="text">
					<input placeholder="Sujet" type="text">
					<textarea placeholder="Votre message" type="text"></textarea>
					<button type="submit" class="waves-effect waves-light btn ">Envoyer</button>
				</fieldset>
			</form>
		</div>
	</div>
</body>

<?php
	
	session_start();

	if(isset($_POST["envoyer"])){
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$email=$_POST["email"];
		$prenom=$_POST["pseudo"];
		
		if(empty($nom)){
			echo "test";
			$_SESSION["err_nom"] = "Veuillez remplir un nom !test";
		}
		else{
			$_SESSION["nom"] = $nom;
		}
		
		if(empty($prenom)){
			$_SESSION["err_prenom"] = "Veuillez remplir un prénom !";
		}
		else{
			$_SESSION["prenom"] = $prenom;
		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$_SESSION["err_email"] = "Veuillez remplir un E-mail !";
		}
		else{
			$_SESSION["email"] = $email;
		}
		
		if(empty($prenom)){
			$_SESSION["err_pseudo"] = "Veuillez ajoutez un Pseudo!";
		}
		else{
			$_SESSION["pseudo"] = $pseudo;
		}
		
	}

?>