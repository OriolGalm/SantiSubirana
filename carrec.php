<?
$qtotal = count($_POST);//Diu quants posts hi ha, el total d'elements.
print_r($_POST);
echo "<br>";//És un salt de línia.
$ides = array_keys($_POST);//Diu els noms de tots els inputs enviats. És una matriu. 
$valors = array_values($_POST);//Genera una matriu amb els valors de tots els inputs del formulari.
print_r($ides);//Imprimirà en pantalla tots els elements de la matriu id's. Sortiran tots els "names" de la matriu.
echo "<br>";//És un salt de línia.
print_r($valors);//Imprimeix en pantalla tots els values dels inputs.
$body ="<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
$body = $body;//'<h1>EL TITOL</h1><hr>';

//$body = $body."<br><i>Input 1: </i>".$_POST['nominmput1']."<br>";//posar tots els inputs que te el formulari.

//Genera una seqüència dels inputs i els seus valors.
for($i=0;$i<$qtotal;$i++){
	$body=$body.$ides[$i].": ".$valors[$i]." <br>";
}


$body = $body."<hr>";
include_once("class.phpmailer.php");
$mail = new PHPMailer();
$mail->charSet	= "UTF-8";
$mail->Host	= 'santisubirana.cat';
$mail->From	= 'SantiSubiranaweb';
$mail->FromName	= 'Pagina web';
$mail->Subject	= 'Nou missatge';
$mail->AltBody	= 'altbody';
$mail->MsgHTML($body);
$mail->AddAddress('accions018@gmail.com');
//$mail->Send();
if($mail->Send()) { echo "<script type='text/javascript'>window.open('http://santisubirana.cat/ca/contacte.html','_self')</script>";}
?>