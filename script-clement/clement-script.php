<?php
include '../config.php';
# le but du script est d'ajouter des photos dans un dossier 
$nomphoto = "clementphoto".date("Y-m-d_H_i_s").".jpg";
file_put_contents('../photosite/' . $nomphoto, ' c est une image');



# ajout dans les bases de données 

# pdo pour acceder a la base de donnée
#connexion à la BDD

$db = new PDO('pgsql:host=localhost;port=5432;dbname=' . dbname, user, mdp);


#vérif si la table existe sinon la créer 

$db->exec('CREATE TABLE IF NOT EXISTS Photo (nom varchar, dateajout date,photo text)');
$db->exec("INSERT INTO Photo (nom,dateajout,photo) VALUES ('clementphoto',to_date('date(Y-m-d)','yyyy/mm/dd'),'../photosite/" . $nomphoto . "')");
echo ('On a bien ajouté la photo');