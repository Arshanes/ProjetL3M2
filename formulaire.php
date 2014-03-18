<?php
header("Cache-Control: no-cache"); 
header('Content-Type: text/html; charset=ISO-8859-1');

// echo '<div id="test">CECI EST UN TEST !!</div>';

// if ( !isset($_POST['nomInput']) || !isset($_POST['emailInput']) ||!isset($_POST['prenomInput']) ){
	// echo '<span id="erreurTransfert"></span>';
// }else{
	// echo '<span id="noerreurTransfert"></span>';
	
	$fichier = fopen("test.txt", "w+b");
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$str_to_write = $nom . " " . $prenom . " " . $email;
	// fwrite($fichier, $nom, $prenom, $email);
	fwrite($fichier, $str_to_write);
	$ferme = fclose($fichier);
// }
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);
?>