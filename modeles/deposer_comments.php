<?php

function insererComments($bdd)
{
	
	$req2 = $bdd->prepare('INSERT INTO commentaires(contenu,date,membre_pseudo) VALUES(:contenu,:membre_pseudo,date("Y-m-d H:i:s"))');
		$req2->execute(array(
			    ':contenu'=> $_POST['contenu'],
	  ':date'=> $_POST['date'],
  ':membre_pseudo'=> $_SESSION['pseudo'];
					
}


function envoiMail($requete)
{
                              
                                $passage_ligne='\r\n';
        
                                //=====Création du header de l'e-mail.
                                $headers = "From: \"victorien.gauch\"<victorien.gauch@gmail.com>".$passage_ligne;
                                $headers.= "Reply-to: \"moi\" <moi>".$passage_ligne;
                                $headers.= "MIME-Version: 1.0".$passage_ligne;
                                $headers.= "Content-Type: multipart/alternative;".$passage_ligne."".$passage_ligne;

                                $sujet = 'Nouvelle annonce';
                                $message = "Une nouvelle annonce a été postée.";


                                while ($donnees = $requete->fetch())
                                {

                                    mail($donnees['mail'], $sujet, $message, $headers);

                                }

}

?>