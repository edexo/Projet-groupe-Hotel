<?php include('connexion.php');
	$msg="";
	if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO reservation (nom,prenoms,email,lieu,etablissement,
		niveau,date_resv,deb_sejour,fin_sejour) 
		VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
	            '".mysqli_real_escape_string($link,$_POST['prenoms'])."',
                '".mysqli_real_escape_string($link,$_POST['email'])."',
                '".mysqli_real_escape_string($link,$_POST['lieu'])."',
                '".mysqli_real_escape_string($link,$_POST['etablissement'])."',
                '".mysqli_real_escape_string($link,$_POST['niveau'])."',
                '".mysqli_real_escape_string($link,$_POST['dateresv'])."',
                '".mysqli_real_escape_string($link,$_POST['debsejour'])."',
                '".mysqli_real_escape_string($link,$_POST['finsejour'])."',)";
		$result=mysqli_query($link  ,$sql);
		if ($result) {
			$msg='Insertion reussie';
		}else{
			$msg=mysqli_error($link);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	<title> - Reservez une chambre maintenant!! </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container-fluid">
			<div class="row"><!-- Menu -->

				<nav class="navbar navbar-blank navbar-fixed-top">
					<div class="container">
						<a class="navbar-brand" href="#">
						  <img src="img/logo.png"  alt="logo" width="130">
					    </a>
					    <ul class="nav navbar-nav navbar-right">
						    <li ><a href=""> ACCUEIL</a></li>
						    <li ><a href="ajouterhotel.php"> AJOUTER VOTRE ETABLISSEMENT</a></li>
						    <li ><a href="nosoffres.php"> NOS OFFRES</a></li>
						    <li ><a href="inscription.php"> INSCRIPTION</a></li>
						    <li ><a href="login.php">LOGIN</a></li>
						    <li ><a href=""> CONTACTS</a></li>
					    </ul>
				    </div><!--  -->
				</nav><!---->
		    </div>	<!-- row -->
		<br><br>
   <!-- banniere de la page d'accueil -->
    <div class="banner" style="background: linear-gradient(-225deg, rgba(0,101,168,0.6) 0%, rgba(0,36,61,0.6) 50%), url('img/background.jpg');">
        <div class="banner-content">
        <div class="lead">
			
		    <h1>BIENVENUE CHEZ NOUS</h1>
            <p>CONFORT ABSOLUE POUR UN SEJOUR INOUBLIABE</p>

			<p><a href="#" class="btn-treehouse btn-lg" data-toggle="modal" data-target="#myModal">RESERVATION</a>
			</p>
		</div><!-- lead -->
        </div><!-- banner-content -->
    </div>	
    <!-- code du formulaire de reservation -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						<h3> Reservez maintenant!</h3>
					</h4>	
				</div>
				<div class="modal-body">
					<form action="" method="POST" role="form" enctype="multipart/form-data">

						<span> <?php echo $msg; ?> </span>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" name="nom" placeholder="votre nom">
						</div>

						<div class="form-group">
							<label>Prenom</label>
							<input type="text" class="form-control" name="prenoms" placeholder="votre prenom">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" placeholder="votre email">
						</div>

						<div class="form-group">
							<label>Ville</label>
							<select select name="lieu" class="form-control">
								<?php
								    //recuperer tous les hotels de la base de données//
								    $sqlrecup="SELECT *FROM hotels";
								    //executer la requete et on la stock dans rephotel
								    $replieu= mysqli_query($link,$sqlrecup);
								    while ($datalieu= mysqli_fetch_array($replieu)) {
								?>
								<option value="<?php echo $datalieu['ville'];?>">
								    <?php echo $datalieu['ville'];?>	
								</option>Wq
								    <?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Etablissement</label>
							<select select name="etablissement" class="form-control">
								<?php
								    //recuperer tous les hotels de la base de données//
								    $sqlrecup="SELECT *FROM hotels";
								    //executer la requete et on la stock dans rephotel
								    $replieu= mysqli_query($link,$sqlrecup);
								    while ($datalieu= mysqli_fetch_array($replieu)) {
								?>
								<option value="<?php echo $datalieu['libelle'];?>">
								    <?php echo $datalieu['libelle'];?>	
								</option>
								    <?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Niveau</label>
							<select select name="niveau" class="form-control">
								<?php
								    //recuperer tous les hotels de la base de données//
								    $sqlrecup="SELECT *FROM categories";
								    //executer la requete et on la stock dans rephotel
								    $repgrade= mysqli_query($link,$sqlrecup);
								    while ($datagrade= mysqli_fetch_array($repgrade)) {
								?>
								<option value="<?php echo $datagrade['libelle'];?>">
								    <?php echo $datagrade['libelle'];?>	
								</option>
								    <?php
								}
								?>
							</select>
						</div>

						

					    <div class="form-group">
							<label>Date reservation</label>
							<input type="text" class="form-control" required="" name="dateresv" placeholder="la date de votre reservation">
						</div>

					    <div class="form-group">
							<label>Debut sejour</label>
							<input type="text" class="form-control" required="" name="debsejour" placeholder="la date debut de votre sejour">
						</div>

						<div class="form-group">
							<label>Fin sejour</label>
							<input type="text" class="form-control" required="" name="finsejour" placeholder="la date fin de votre sejour">
						</div>

                        <input type="submit" name="btnValider" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div><br><br>

	<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<a href=""> <img src="img/berlin.jpg" width="100%" height="300px" style="margin-bottom: 20px;"> </a>
			<h4 style="color: red;">Nuisette Dusk </h4>
			<h3> <a href="" style="color: black; text-decoration: none;">collection extra model de la marque AXAMI</a></h3>
			<p style="font-size: 16px; margin-top: 20px; color: red;">
				<em><strong>prix:15.000F</strong></em>.
			</p>
			
		</div>
		<div class="col-sm-4">
			<a href=""> <img src="img/berlin.jpg" width="100%" height="300px" style="margin-bottom: 20px;"> </a>
			<h4 style="color: red;">Nuisette mariage </h4>
			<h3> <a href="" style="color: black; text-decoration: none;">En soie sexy et charme rouge femme NK2</a></h3>
			<p style="font-size: 16px; margin-top: 20px; color: red;">
				<em><strong>prix:17.000F</strong></em>.
			</p>
			
		</div>
		<div class="col-sm-4">
			<a href=""> <img src="img/berlin.jpg" width="100%" height="300px" style="margin-bottom: 20px;"> </a>
			<h4 style="color: red;">lingerie mariage </h4>
			<h3> <a href="" style="color: black; text-decoration: none;">Obsessive Imperia black nuisette</a></h3>
			<p style="font-size: 16px; margin-top: 20px; color: red;">
				<em><strong>prix:15.000F</strong></em>.
			</p>
			
		</div>
	</div>	
</div>	

  <div class="vertical-spacer"></div>

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<ul class="list-inline social text-center">
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-instagram"></i></a></li>
						<li><a href=""><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>

				<div class="col-lg-9">
					<div class="text-center">
						le confort la rapidité notre <a href="#">slogant</a> client satisfait ou satisfaits.
					</div>
				</div>
			</div>
		</div>
	</div>      


<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

