<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="colors.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">		
		<title>Eva Gomes - Portfolio</title>
	</head>
	<body>	
		<header class="header_class">
		<div class="logo_eva">
			<a href="#"><img src="images/logo.png"></a>
		</div>			
			<input type="checkbox" id="navbar-checkbox" class="navbar-checkbox">
				<nav class="menu">
				  <ul>
				    <li class="title_menu"><a href="#competences">compétences</a></li>
				    <li class="title_menu"><a href="#parcours">parcours</a></li>
				    <li class="title_menu"><a href="#portfolio">portfolio</a></li>
				    <li class="title_menu"><a href="#contact">contact</a></li>
				  </ul>
				  
				  <label for="navbar-checkbox" class="navbar-handle"></label>
				</nav>
		</header>
		<div id="presentation">
			<h1 id="prenom_presentation">EVA GOMES</h1>
			<div id="divpresentation">
				<!--<div id="logo_eva">
					<img src="images/logo_eva_black.png" alt="logo_eva" id="img_logo_eva">
				</div>
				<p class="texte_presentation"> Après un Brevet de Technicien en Arts Appliqués, j’ai choisi 	de me réorienter en intégrant une formation en développement web. Sur le net depuis très 	jeune, le domaine du développement m’a toujours intéressée</p>-->
			</div>
		</div>
		<div id="competences">
			<h2 class="titre_compe">COMPÉTENCES</h2>
			<div class="logo_adobe">	
				<div class="logo photoshop">
					<img src="images/logo_photoshop.png" id="logo_photoshop">
					<img src="images/logo_photoshop_vert.png" id="logo_photoshop_green">
				</div>
				<div class="logo illustrator">
					<img src="images/logo_illustrator.png" id="logo_illustrator">
					<img src="images/logo_illustrator_vert.png" id="logo_illustrator_green">
				</div>
				<div class="logo indesign">
					<img src="images/logo_indesign.png" id="logo_indesign">
					<img src="images/logo_indesign_vert.png" id="logo_indesign_green">
				</div>
			</div>
			<!--<img src="images/fond1.png" id="fond1">-->	
			<div class="logo_dev">
				<div class="logo html">
					<img src="images/logo_html.png" id="logo_html">
					<img src="images/logo_html_vert.png" id="logo_html_green">
				</div>
				<div class="logo css">
					<img src="images/logo_css.png" id="logo_css">
					<img src="images/logo_css_vert.png" id="logo_css_green">
				</div>
				<div class="logo js">
					<img src="images/logo_js.png" id="logo_js">
					<img src="images/logo_js_vert.png" id="logo_js_green">
				</div>				
			</div>		
			<div class="logo_dev_bis">
				<div class="logo bootstrap">
					<img src="images/logo_bootstrap.png" id="logo_bootstrap">
					<img src="images/logo_bootstrap_vert.png" id="logo_bootstrap_green">
				</div>
			</div>		
		</div>
		<div id="parcours">
			<h2 class="titre_parc">PARCOURS</h2>
   			<div class="example-centered">        
   			    <div class="lol" id="parcours">
   			        <ul class="timeline timeline-centered">
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Avril 2014</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Stage de découverte</h3>
   			                    <p class="description-content">
   			                    	Imprimerie Recto Verso
   			                    	<br>
   			                    	Tournus - 71700	
   			                    </p>
   			                </div>
   			            </li>
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>2014 - 2017</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Lycée Polyvent Henry Moisand</h3>
   			                    <p class="description-content">
   			                    	Métier de la céramique, Arts et Design
   			                    	<br>
   			                    	Longchamp - 21200
   			                    </p>
   			                </div>
   			            </li>   			            
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Mai 2017</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Diplôme</h3>
   			                    <p class="description-content">
   			                    	Brevet de technicien en Arts Appliqués option décor sur céramique
   			                	</p>
   			                </div>
   			            </li>
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Juillet - Août 2017</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Animatrice Jeunesse</h3>
   			                    <p class="description-content">
   			                    	Sur le dispositif des "Berges en Folies"
   			                    	<br>
   			                    	Mairie de Tournus - 71700
   			                    </p>
   			                </div>
   			            </li>   			            
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Depuis Septembre 2017</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Formation en développement web</h3>
   			                    <p class="description-content">
   			                    	Access Code School
   			                    	<br>
   			                    	Belfort - 90000
   			                    </p>
   			                </div>
   			            </li>
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Avril - Mai 2018</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Stage de formation</h3>
   			                    <p class="description-content">
   			                    	Inovi - ZeLift
   			                    	<br>
   			                    	Dijon - 21000
   			                    </p>
   			                </div>
   			            </li>
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Juin 2018</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Diplôme</h3>
   			                    <p class="description-content">
   			                    	Titre Professionel : Designer Web
   			                	</p>
   			                </div>
   			            </li>
   			            <li class="timeline-item">
   			                <div class="timeline-info">
   			                    <span>Juin 2018</span>
   			                </div>
   			                <div class="timeline-marker"></div>
   			                <div class="timeline-content">
   			                    <h3 class="timeline-title">Développeuse Web Front-End</h3>
   			                    <p class="description-content">
   			                    	Inovi - ZeLift
   			                    	<br>
   			                    	Dijon - 21000
   			                    </p>
   			                </div>
   			            </li>
   			        </ul>
   			    </div>
   			</div>
		</div>
		<div id="portfolio">
			<h2 class="titre_portf">PORTFOLIO</h2>
			<div class="page">
		      <div class="page__demo">
		        <div class="page__container">
		          <div class="photobox photobox_type21">
		            <div class="photobox__previewbox">
		              <img src="images2/quicksave_500.png" class="photobox__preview" alt="Preview">
		              <span class="photobox__label">
		                <h4 class="title-box-portfolio">QUICKSAVE</h4>
		                  <p class="description_portf">Une application conçu à partir de DATA permettant la localisation des défibrillateurs et des pharmacies les plus proches</p>
		                  <a href="https://evag.promo-4.codeur.online/Quicksave/" target="_blank" class="link-project">https://evag.promo-4.codeur.online/Quicksave/</a>
		              </span>
		            </div>
		          </div>
		          <div class="photobox photobox_type21">
		            <div class="photobox__previewbox">
		              <img src="images2/pigeon_500.png" class="photobox__preview" alt="Preview">
		              <span class="photobox__label">
		                <h4 class="title-box-portfolio">PIGEON</h4>
		                   <p class="description_portf">Système d'envoi de fichier volumineux</p>
		                   <!-- <a href="https://evag.promo-4.codeur.online/Pigeon" target="_blank" class="link-project">https://evag.promo-4.codeur.online/Pigeon/</a> -->
		              </span>
		            </div>
		          </div>
		          <div class="photobox photobox_type21">
		            <div class="photobox__previewbox">
		              <img src="images2/ercphysio_500.png" class="photobox__preview" alt="Preview">
		              <span class="photobox__label">
		                <h4 class="title-box-portfolio">ERCPhysio</h4>
		                    <p class="description_portf">Application pédagogique permettant de développer et évaluer des compétences pour le masseur-kinésithérapeute en formation initiale et continue</p>
		                    <a href="http://evag.promo-4.codeur.online/ERCPhysio/public" target="_blank" class="link-project">https://evag.promo-4.codeur.online/ERCPhysio/public/</a>
		              </span>
		            </div>
		          </div>                     
		        </div>  
		      </div>
		    </div>
		</div>
		<div id="contact">
			<h2 class="titre_contact">CONTACT</h2>
			<form id="form-contact" action="contact.php" method="post">
				<div class="form1">
					<div class="form-one">
						<input type="text" name="name" id="nom-prenom" class="form-contact-input" placeholder="Nom & Prénom ..." value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
					</div>
					<div class="form-one" id="marge_objet">
						<input type="text" name="objet" class="form-contact-input" placeholder="Objet ..." value="<?php echo isset($_SESSION['inputs']['objet'])? $_SESSION['inputs']['objet'] : ''; ?>">
					</div>
				</div>
				<div class="form2">
					<div>
						<input type="email" name="email" class="form-contact-input" placeholder="Email ..." value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
					</div>
				</div>
				<div class="form3">
					<div>
						<textarea class="form-contact-input" id="id_msg"placeholder="Votre message..." name="message"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
					</div>
				</div>
				<?php if(array_key_exists('errors',$_SESSION)): ?>
  						<div class="alert alert-danger">
  						<?= implode('<br>', $_SESSION['errors']); ?>
  						</div>
  						<?php endif; ?>
  						<?php if(array_key_exists('success',$_SESSION)): ?>
  						<div class="alert alert-success">
  						Votre email à bien été transmis !
  						</div>
  						<?php endif; ?>	
  				<div class="lol" id="btn-send">
					<button type="submit" class="btn_envoie">ENVOYER</button>
				</div>
			</form>
		</div>
		<footer>
			<div class="logo_footer">
				<a href="https://www.linkedin.com/in/eva-gomes-829a04153/" target="_blank"><img src="images/logo_linkedin6.png" class="logo_footer_margin"></a>
				<a href="https://github.com/EvaGms" target="_blank"><img src="images/logo_github_vert.png" class="logo_footer_margin"></a>		
				<a href="CV-EvaGomes.pdf" target="_blank"><img src="images/logo_cv.png"></a>	
			</div>
			<div class="copy">
				<p>Copyright 2018</p>
			</div>
		</footer>
		<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>