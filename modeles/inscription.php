<?php

function insererMembre($bdd)
{
		$req = $bdd->prepare('INSERT INTO membre(pseudo,nom,prenom,mail,adresse,tel,ecole,promotion,date_de_naissance,profession) VALUES(:pseudo,:nom,:prenom,,:mail,:adresse,:tel)');
		$req->execute(array(
			':pseudo'=> $_POST['pseudo'],
			   ':nom'=> $_POST['nom'],
			':prenom'=> $_POST['prenom'],
			  ':mail'=> $_POST['mail'],
		       ':adresse'=> $_POST['adresse'],
			   ':ecole'=> $_POST['ecole'],
			   ':promotion'=> $_POST['promotion'],
			   ':date_de_naissance'=> $_POST['date_de_naissance'],
			   ':profession'=> $_POST['profession'],
			   ':tel'=> $_POST['tel'];

}

function compterMembre($bdd)
{
	$req = $bdd->prepare('SELECT COUNT(*) FROM membre WHERE pseudo= ?');
    $req->execute(array($_POST['pseudo']));
    $dn = $req->fetchColumn();
    $req->closeCursor();
    return $dn;
}
?>



