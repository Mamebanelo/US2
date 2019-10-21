<?php

// Récupération des données saisies dans des variables
  if (!empty($_POST["nom"]) && 
      !empty($_POST["prenom"])&&
       !empty($_POST["date_nais"]) && 
       !empty($_POST["lieu_nais"]) && 
       !empty($_POST["tel"]) && 
       !empty($_POST["adresse"]) && 
       !empty($_POST["email"]) && 
       !empty($_POST["ref_session"]) && 
       !empty($_POST["etat"]) 
    ) 
{
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $date_nais = $_POST["date_nais"];
                    $lieu_nais=$_POST["lieu_nais"];
                    $tel = $_POST["tel"];
                    $adresse = $_POST["adresse"];
                    $email = $_POST["email"];
                    $ref_session = $_POST["ref_session"];
                    $etat = $_POST["etat"];

                    //Connexion à la base de données
                    include_once('db_connect.php');

                    //Ecriture de la requête
                    $requete="INSERT into `apprenant` ( `nom`, `prenom`, `date_nais`, `lieu_nais`, `tel`, 'adresse',
                    'email', 'ID_RS', 'id_etat') values ('$nom','$prenom', '$date_nais', '$lieu_nais', '$tel','$adresse', '$email', '$ref_session', '$etat')";
                    echo $requete;
                    
                    //Envoi de la requête
                    $reponse = $pdo->exec($requete);

                    //Affichage du bon déroulement de la requête à l’utilisateur
                    if($reponse)
                    header("Location: ../Views/liste-session.php"); 
                   /* else
                    header("Location: ../Views/add-user.php?erreur=Le login existe déja");  */
 }

 else
 { // cas où les données n'ont pas été saisies
    header("Location: ../Views/add-session.php?erreur=les champs n'ont pas été remplis");  


  }
?>