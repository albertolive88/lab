<?php
$nosession = true;
include 'includes/init.php';


if(Usuari::entrat()){
	header("Location: http://".General::base_url."/");
}

if (isset($_REQUEST['email']))
{
	$resultat = Usuari::enviarNouPsw($_REQUEST['email']);
	if($resultat==1)
	{
	header("Location: http://".General::base_url."/");
	exit;
	}
}

include 'includes/header_logout.php';

?>

<div id="pagina-login">

	<div id="capcalera-recuperar" class="clearfix">
		<h1>Has oblidat la teva contrasenya?</h1>
		<a href="/login/">He recuperat la memòria i ja sé quina és...</a>
	</div>
	

	<form method="post" accept-charset="utf-8">
		
		<div class="clearfix">
		<label for="email1">Email</label>
		<div class="input">
		<input type="email" name="email" id="email">
		</div>
		</div>

		<input type="submit" value="Demanar nova contrasenya"  class="submit">
	</form>
	
</div>

<?php include 'includes/footer_logout.php'; ?>