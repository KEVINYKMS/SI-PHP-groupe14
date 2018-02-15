
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Yokubō</title>
</head>

<body>
  <div class="containerHomePages">
    <div class="rectangle">
      <h1>YOKUBŌ</h1>
      <a href="#choisir" class="scrollLink"><p class="reserverr">Réservez une table</p></a>
      <div class="scrollContainer">
      </div>
      <p class="scroll">SCROLL</p>
    </div>

</div>  </div>

  <div class="secondpart">
    <p class="yokubo">Yokubō</p>
    <p class="zeroun">01</p>
    <img class="knife" src="img/knife.png" alt="">
    <p class="jap">欲望</p>
    <p class="parasecondpart">Créatrice de tendances Franco-japonaises, YOKUBŌ</br>propose depuis ses débuts une large gamme de</br>recettes savoureuses adaptées aux palais</br>occidentaux.</br></br>Afin de s’adapter à tous ses clients et à tous types de
      régimes alimentaires</br>l’enseigne propose depuis plusieurs années des</br>recettes classiques, chaudes, froides, healthy, veggie,</br>vegan et sans gluten.</br></br>Soucieuse de la qualité des produits qu’elle propose</br>à
      ses clients, la marque maîtrise sa chaîne de</br>production de A à Z.</p>
  </div>
<div class="thirdpart">
  <p class="menu">Menu</p>
  <p class="zerodeux">02</p>
  <p class="firsttrait">-</p>
  <p class="secondtrait">-</p>
  <img class="imgthirdpart" id="imgthirdpart" src="img/gastro-sushi-theme-02.png" alt="">
  <p class="parathirdpart">Des produits de saisons et de qualité, assaisonnés</br>d’une grosse dose de savoir faire et d’une petite</br>touche de folie</p>
  <a href="#imgthirdpart"><input type="input" class="decouvrir" id="decouvrir">Découvrer notre Menu</input></a>
</div>
<div class="fourthpart">
  <p class="reserver">Réserver</p>
  <p class="zerotrois">03</p>
  <p class="egal">=</p>
  <a href="#choisir" class="scrollLink"><input type="input" class="table">Réserver une table</input></a>
  <img src="img/Bitmap.png" alt="" class="bitmap">
</div>
<div class="sixpart">
  <p class="reservertrois">Réserver</p>
  <p class="zerotroistrois">03</p>
  <p class="choisir" id="choisir">Choisissez la date</p>
    <?php include "data.php" ?>

	<form action="traitement.php" method="post">
		<input type='date' name='date' required>
		<input type="text" name="nom" class="nom" placeholder="Nom"><br/>
		<input type="text" name="prenom" class="prenom" placeholder="Prénom"><br/>
		<input type="tel" name="numtel" class="numtel" placeholder="06 10 20 30 40"><br/>
		<input type="email" name="mail" class="mail" placeholder="exemple@hotmail.com"><br/>
		<input type="submit" class="valider" value="oui"><br/>
	</form>

<div class="footer">
  <p class="come">VENIR</p>
  <p class="adresse">31-33 Av. des Champs-Élysées, 75008 Paris</p>
  <p class="contact">CONTACT</p>
  <p class="tel">Tél: 01.72.90.30.23</p>
  <p class="pfooter1">OUVERTURE</p>
  <p class="pfooter">LUNDI: 11:30 - 22:30</p>
  <p class="pfooter">MARDI: 11:30 - 22:30</p>
  <p class="pfooter">MERCREDI: 11:30 - 22:30</p>
  <p class="pfooter">JEUDI 11:30 - 22:30</p>
  <p class="pfooter">VENDREDI: 11:30 - 22:30</p>
  <p class="pfooter">SAMEDI: 11:30 - 22:30</p>
  <a href="#join"><img src="img/instagram.svg" alt"" class="instagram"/></a>
  <a href="#join"><img src="img/facebook.svg" alt"" class="facebook"/></a>
  <a href="#join"><img src="img/twitter.svg" alt"" class="twitter"/></a>
  <p class="pfooter">DIMANCHE: FERMÉ</p>
  <a href="#join"><p class="join" id="join">REJOIGNEZ L'ÉQUIPE</p></a>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");
	if (the_id === '#') {
		return;
	}
	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
});
</script>-->
<!--<script>
var suiteun = document.querySelector('.un');
var suitedeux = document.querySelector('.deux');
var suitetrois = document.querySelector('.trois');
var suitequatre = document.querySelector('.quatre');
var suitecinq = document.querySelector('.cinq');
var suitesix = document.querySelector('.six');
var suitesept = document.querySelector('.sept');
var suitehuit = document.querySelector('.huit');
var formulaire = document.querySelector('.layout');
var visible = document.querySelector('.footer');

suiteun.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
suitedeux.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  if (visible.style.marginTop = '180px') {
      visible.style.marginTop = '0px';
  }
  }
});
suitetrois.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
suitequatre.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
suitecinq.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
suitesix.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
suitesept.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
suitehuit.addEventListener('click', function() {
  if (formulaire.style.display = 'none') {
    formulaire.style.display = 'block';
  }
  if (visible.style.marginTop = '180px') {
    visible.style.marginTop = '0px';
  }
});
</script>
<script>
var envoyer = document.querySelector('.envoyer');
var partcinq = document.querySelector('.cinqpart');

envoyer.addEventListener('click', function() {
  if (partcinq.style.display = 'none') {
    partcinq.style.display = 'block';
    partcinq.style.position = 'relative';
  }
});
</script>-->
</body>
</html>
