<!DOCTYPE html>
<html>
<head>

<title>LOGIN</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<br><br>
<p>
			<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Connexion</a> OU
			<span></span>
			<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">S'inscrire</a>
		</p> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						<h3>Connectez vous maintenant!</h3>
					</h4>
					
				</div>
				<div class="modal-body">
					<form role="form">
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" class="form-control" name="email" placeholder="votre email">
						</div>

						<div class="form-group">
							<label>MOT DE PASSE</label>
							<input type="password" class="form-control" name="mot de passe" placeholder="votre mot de passe">
						</div>
						<a href="login.php">Mot de passe oublier? </a><br>
						<label>
							<input type="checkbox" name="checkbox" value="P">Restez Connecter
						</label><br>
					<input type="submit" value="COMMENCER" name="" class="btn btn-primary"><br><br>

				<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">FACEBOOK</a> OU
			<span></span>
			<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">GMAIL</a>
					</form>
				</div>

			</div>
		</div>
	</div><br><br>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>