<?php 
		
function afficherComments($bdd)
{
    $req = $bdd->query('SELECT * FROM commentaires WHERE id_projet="'.$_GET['id_projet'].'" ORDER BY date DESC');
    return $req;
}

function insererComments($bdd)
{
    $req = $bdd->prepare('INSERT INTO commentaires(contenu,date,membre_pseudo,id_projet) VALUES(:contenu,date("Y-m-d H:i:s"),:membre_pseudo,:id_projet)');
    $req->execute(array(
        ':contenu' => $_POST['contenu'],
        ':membre_pseudo' => $_SESSION['pseudo'],
        ':id_annonce' => $_GET['id_projet']));
}
?>

		

		