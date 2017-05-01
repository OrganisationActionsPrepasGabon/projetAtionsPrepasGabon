<?php

function verifierPseudo($bdd)
{
	$req = $bdd->prepare('SELECT pseudo FROM membre WHERE pseudo= ? AND mdp = ?');
	$req->execute(array($_POST['pseudo']));
	$data = $req->fetch();
	if($data['pseudo']!= NULL)
	{
		return true;
	}
	else{
		return false;
	}
        
}


function userid($bdd)
{
    $req = $bdd->query('SELECT pseudo,id FROM membre WHERE pseudo="'.$_POST['pseudo'].'"');
    $dn = $req->fetch();
    return $dn;
}

