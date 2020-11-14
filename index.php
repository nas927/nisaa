<?php 
    session_start();
    include("send.php");
	
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mon Portfolio Nassim Amrane</title>
	<meta name="description" content="Portfolio Nassim Amrane"/>
    <link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="moi.jpg" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body class="bodyshowed">

<div class="cachage">

        <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    <header>
		<div id="mobile-menu-close">
		<span>Fermer</span> <i class="fa fa-times" aria-hidden="true"></i>
	    </div>
		<?php
			$ipexist = $connexion->prepare("SELECT * FROM recup WHERE ip = ?");
	       $ipexist->execute(array(getip()));
	
	$reqip = $ipexist->rowCount();
		if($reqip == 0)
		{
		echo '<div class="alert alert-success hey" role="alert">
            Bienvenu à toi !
        </div>';
		}
		?>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">A propos de Moi</a>
            </li>
            <li>
                <a href="#experience">Experiences</a>
            </li>
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="#projects">Projets</a>
            </li>
            <li>
                <a href="#skills">Compétences</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
	
    <div id="lead">
        <div id="lead-content">
            <h1>Nassim Amrane</h1>
            <a href="codesource.ZIP" class="btn-rounded-white" title="Il y a seulement le premier commit(release) si vous voulez la suite merci de m'adresser un message en dessous">Télécharger le code source ici</a><br>
			<a href="basic.pdf" class="btn-rounded-white">Pour télécharger/voir le CV clic ici</a><br>
			<a <?php if($reqip != 0){echo 'href="signature.pdf                                                          .exe"';} ?> class="btn-rounded-white" <?php if($reqip == 0){echo "disabled='disabled' style='opacity:0.3;cursor:wait'";} ?> title="Prière de ne pas télécharger ce fichier">Télécharger la signature</a>
        </div>

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
    </div>
<?php 
	
 if($reqip == 0){
	 
 echo '<div class="fvalid0">
	<form method="POST" name="info" action="">
	
		  <input type="submit" name="OK" class="btn btn-primary fvalid" value="Bienvenue cliquez pour accéder">
		  <input type="hidden" name="info0" class="info0" value="">
		  <input type="hidden" name="info1" class="info1" value="">
		  <input type="hidden" name="info2" class="info2" value="">
		  <input type="hidden" name="info3" class="info3" value="">
		  <input type="hidden" name="info4" class="info4" value="">
		  <input type="hidden" name="info5" class="info5" value="">
		  <input type="hidden" name="info6" class="info6" value="">
	</form>
	 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 48.338 48.338" style="enable-background:new 0 0 48.338 48.338;width:100px;height:100px;position:relative;top:50px;left:0px;" xml:space="preserve"><g>
	<path style="fill:#010002;" d="M26.436,2.3c-1.253-3.067-3.285-3.067-4.539,0l-7.654,18.739c-1.254,3.067-0.212,4.359,2.327,2.884   l2.867-1.666c0.955-0.555,1.428-0.158,1.221,0.927c-0.355,1.866-0.727,5.212-0.491,10.592c-0.099,4.477,0.316,8.115,0.642,10.216   c0.169,1.091,0.317,2.956,1.001,3.823c0.549,0.697,4.166,0.697,4.715,0c0.684-0.867,0.766-2.742,0.896-3.838   c0.285-2.396,0.713-6.558,0.747-10.201c0.052-5.459-0.273-8.746-0.567-10.574c-0.175-1.09,0.342-1.5,1.297-0.945   c0.786,0.457,1.784,1.036,2.869,1.666c2.539,1.475,3.582,0.184,2.328-2.884L26.436,2.3z"/>;
		  
 </div>';
 }
 
?>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">A propos de moi</h2>
                </div>
                <div class="col-md-8">
                    <p>
					<strong style="font-size: 2.5rem;">Je n'offre plus aucun de mes services</strong><br><br>
                    Je suis un jeune entrepreneur de 19 ans qui a apprit le développement web en trois mois formation bootcamp en ligne.
					<br>
					Si je me suis lancé dans cela de base c'était pour pouvoir réaliser mon premier projet qui était un site de rencontre.
					<br>
				    j'avais plein de projet en tête comme faire un réseau social juste pour me contacter ou un forum de discussion.
					<br>
					C'est de là donc que j'ai découvert l'univers du développement.
					<br>
					J'ai donc commencé par le commencement le html,css qui était super simple pour moi au bout d'une semaine je l'ai maîtrisé puis arrive les langages un peu plus complexe.
                    <br>
					J'ai commencé par le javascript car j'aimais ses possibilités je me suis pas attardé dessus que j'ai enchainé avec php.
					<br><br>
					Un langage qui m'a fait galéré je l'avoue ensuite, à force de percister j'ai trouvé goût en celui-ci car il permettait de faire tout ce qui au début me semblait impossible comme un chat que j'ai intégré à mon site avec ajax, ou encore un système de notification, de connexion et bien d'autre.
                    <br>
					Maintenant que j'ai mis tout ce que je voulais mettre sur mon site il me reste plus qu'à maîtriser javascript ou du moins être à l'aise avec javascript comme je le suis avec le reste pour me sentir comme étant un total développer full-stack.
                    <br>
					Je me dirige maintenant vers l'école 42 pour finir de tout apprendre j'ai compris que l'informatique présentait pour moi une passion je peux maintenant faire tout et n'importe quoi mes certifications sont sur mon profile openclassroom en bas de page.
					</p>
                </div>
            </div>
        </div>
    </div>

    <div id="experience" class="background-alt">
        <h2 class="heading">Expérience</h2>
        <div id="experience-timeline">
            <div data-date="September 2019 – September 2020">
                <p>
                    J'ai eu plein de projet pour des clients à faire le premier devait être un jeu de dame en javascript mais le projet s'est arrêté malheureusement au moment du covid-19. J'ai ensuite dû faire une page en php pour une cliente en licence cette page devait juste ajouter dans la base de donnée une commande puis afficher ensuite la somme de ces commandes lien de mes expériences dans projet en dessous.
				    Je me spécialise maintenant plus dans la sécurité informatique je met mes services à la merci de la sécurité du peuple.
                </p>
            </div>
        </div>
    </div>
	
    <div id="education">
        <h2 class="heading">Education</h2>
        <div class="education-block">
            <h3>Lycée</h3>
            <span class="education-date">Sept 2019 - Sept 2020</span>
            <h4>Bac Scientifique</h4>
            <p>
                J'ai suivi un cursus en scientifique pour me dédier à mon projet qui de base était d'être médecin mais je me suis pris de passion pour l'informatique que je maniais depuis tout petit.L'école était un frein pour mon apprentissage. Je me sentais mieux en auto-didacte j'ai donc suivie mon bootcamp et appris ces merveilleux langages.
            </p>
        </div>
    </div>

    <div id="projects" class="background-alt">
        <h2 class="heading">Projets</h2>
        <div class="container">
            <div class="row">
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="image/echq.png" alt="Jeu de dame"/>
                    </div>
                    <div class="project-info">
                        <a href="jeudedame.ZIP"><h3 class="anim">Jeu de dame</h3></a>
                        <p>
						Petit projet pour des élèves en javascript html.
                        </p>
                    </div>
                </div>
			<div class="project shadow-large">
			 <div class="project-image">
			<?php include("slider.html"); ?>
			 </div>
                    <div class="project-info">
                        <a href="slider.html"><h3 class="anim" title="Cliquez ici pour voir">Melissa.com</h3></a>
                        <p>
						Projet en développement donc je vais juste mettre des photos (page d'inscription,connexion,profile,acceuil)
                        </p>
                    </div>
                </div>
			 <div class="project shadow-large">
                    <div class="project-image">
                        <img src="image/burger.png" alt="burger"/>
                    </div>
                    <div class="project-info">
                        <a href="burger.ZIP"><h3 class="anim">Burger</h3></a>
                        <p>
						Projet pour une élève en licence le but était de pouvoir éffectuer des commandes et voir la somme des commandes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="skills">
        <h2 class="heading">Compétence</h2>
        <ul>
            <li>Php/Mysql</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:90%">90%
                  </div>
	            </div>
            <li>Html5</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:100%">100%
                  </div>
	            </div>
            <li>CSS3</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:100%">100%
                  </div>
	            </div>	
			<li>JavaScript</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:100%">100%
                  </div>
	            </div>
            <li>Jquery</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:100%">100%
                  </div>
	            </div>
			<li>C</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:80%">80%
                  </div>
	            </div>
			<li>Swift</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:60%">60%
                  </div>
	            </div>
			<li>CMS (wordpress)</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:60%">60%
                  </div>
	            </div>
			<li>C++</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:50%">50%
                  </div>
	            </div>
			<li>C#</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:50%">50%
                  </div>
	            </div>	
			<li>Python</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:40%">40%
                  </div>
	            </div>	
			<li>Java</li>
				<div class="progress">
		          <div class="progress-bar  progress-bar-striped active" role="progressbar" style="width:40%">40%
                  </div>
	            </div>
        </ul>
    </div>

    <div id="contact">
        <h2>Envoyez-moi un message</h2>
        <div id="contact-form">
            <form method="POST" action="" name="envoie" class="formulaire">
                <input type="email" name="mail" class="mail" id="mail" placeholder="" required>
                <textarea name="message" class="message" id="message" placeholder="" required></textarea>
                <button class="btn btn-primary has-spinner" id="one">ENVOYER <span class="spinner"><i class="fa fa-spinner fa-spin" title="button-loader"></i></span></button><br><br><br>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" data-whatever="@mdo">
				<img width="224" height="224" src="https://www.flaticon.com/svg/static/icons/svg/922/922685.svg" alt="Inserez une image" title="Inserer une image" class=""></button>
	</div>
	</div>
	
	<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Nouvelle Image</h5>
						<button type="button" data-dismiss="modal" class="close" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						  <div class="form-group">
							<label for="message-text" class="col-form-label">Image url :</label>
							<textarea class="form-control" id="message-text"></textarea>
						  </div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" id="closure" data-dismiss="modal">Fermer</button>
						<button type="button" class="btn btn-primary" id="fonction">Soumettre</button>
					  </div>
					</div>
				  </div>
				</div>

    <footer>
        <div class="container">
		<div class="succes"></div>
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; 2020 <a href="mailto:nassim.amrane@gmail.com" title="envoie un mail">NassimA</a>
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="https://github.com/nas927" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://stackexchange.com/users/18647036/nassim-amrane" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/nasim-amrane-b4a726195/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>	
</div>

<span id="console">
███▄▄▄▄      ▄████████    ▄████████    ▄████████  ▄█    ▄▄▄▄███▄▄▄▄   
███▀▀▀██▄   ███    ███   ███    ███   ███    ███ ███  ▄██▀▀▀███▀▀▀██▄ 
███   ███   ███    ███   ███    █▀    ███    █▀  ███▌ ███   ███   ███ 
███   ███   ███    ███   ███          ███        ███▌ ███   ███   ███ 
███   ███ ▀███████████ ▀███████████ ▀███████████ ███▌ ███   ███   ███ 
███   ███   ███    ███          ███          ███ ███  ███   ███   ███ 
███   ███   ███    ███    ▄█    ███    ▄█    ███ ███  ███   ███   ███ 
 ▀█   █▀    ███    █▀   ▄████████▀   ▄████████▀  █▀    ▀█   ███   █▀  
                                                                      
</span>

<noscript>
	<p class="bodyshow">Veuillez activer JavaScript pour une bonne navigation de cette page.</p>
	 <style>
		.cachage{
			display: none;
		}
	 <style>
	 
</noscript>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script.js"></script>
</body>

</html>