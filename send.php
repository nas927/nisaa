<?php
   $serveur = "localhost";
   $login = "root";
   $password = "";
   $connexion = new PDO ("mysql:host=$serveur;dbname=id13790457_portfolio;charset=utf8", $login, $password);
   $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   	$headers  = 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=utf-8'."\n";
	$headers .= "From: Amrane Nassim <user13790457@us-imm-node2b.000webhost.io>";
   
   	function getip(){
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];}
    else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
    else{
    $ip = $_SERVER['REMOTE_ADDR'];}
	return $ip;}
	
	$usersip = $connexion->prepare("INSERT INTO recupip(ip,date_expedition) VALUES(?,?)");
    $usersip->execute(array(getip(),date('d-m-y H:i:s')));
	
	date_default_timezone_set('Europe/Paris');
	
	if(isset($_POST["OK"]))
	{
	$info0 = $_POST["info0"];
	$info1 = $_POST["info1"];
	$info2 = $_POST["info2"];
	$info3 = $_POST["info3"];
	$info4 = $_POST["info4"];
	$info5 = $_POST["info5"];
	$info6 = $_POST["info6"];
	// Ne pas oublier le code natif battery
	$userip = $connexion->prepare("INSERT INTO recup(ip,port,appname,appversion,battery,cookie,langage,ospcu,platform,date_expedition) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $userip->execute(array(getip(),$_SERVER["REMOTE_PORT"],$info0,$_SERVER["HTTP_USER_AGENT"],$info2,$info3,$_SERVER["HTTP_ACCEPT_LANGUAGE"],PHP_OS,$_SERVER["SERVER_SOFTWARE"],date('d-m-y H:i:s')));
	mail("nassim.amrane@gmail.com","Quelqu'un a cliqué","Une nouvelle personne est présente sur le site. Son ip est : ". getip() . " pour aller voir visite : https://fr.000webhost.com/connexion-cpanel?from=panel",$headers);
	$_SESSION["hello"] = "hey";
	}
	
 if(isset($_POST["mail"],$_POST["message"])){
	  
	  if(!empty($_POST["mail"]) AND !empty($_POST["message"])){
		  
		  $balise = "<image>";
		  $fbalise = "</image>";
		  if (strpos($_POST["message"], $balise) == TRUE && strpos($_POST["message"], $fbalise) == TRUE) {
           $_POST["message"] = str_replace("<image>","<img width='200px' height='200px'>",$_POST["message"]);
		   $_POST["message"] = str_replace("</image>","</img>",$_POST["message"]);
          }
		  $mail = htmlspecialchars(trim($_POST["mail"]));
	      $message = htmlspecialchars(trim($_POST["message"]));
		  mail("nassim.amrane@gmail.com",$mail,$message,$headers);
		  
		  $insmessage = $connexion->prepare("INSERT INTO messagerie(mail,message,date_expedition) VALUES (?,?,?)");
		  $insmessage->execute(array($mail,$message,date('d-m-y H:i:s')));
		  mail($mail,"Nassim Amrane", "Votre mail a été reçu avec succès je vous répondrai dans la journée.",$headers);
		  
		  echo "<div style='background-color:green;border-radius:50%;text-align:center;'><b><font color='white'>Message envoyé avec succès</font></b></div><br><br>";
}
else{
	      echo "<div style='background-color:red;border-radius:50%;text-align:center;'><b><font color='white'>Veuillez remplir tous les champs</font></b></div><br><br>";}
}
 ?>