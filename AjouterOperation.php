 <?php include("head.php");?>

<?php
include("connexion.php");
?>
<?php

// Facultative :: isset — Détermine si une variable est définie et est différente de NULL
if (isset ($_POST['enregistrer']))
{
// Facultative ::



//On récupère les valeurs entrées par l'utilisateur :


$Num_Ope=$_POST['Num_Ope'];   
$Num_Cpt=$_POST['Num_Cpt'];  
     
$Type_Ope=$_POST['Type_Ope'];   
   
$Date_Ope=$_POST['Date_Ope'];   
$Validation=$_POST['Validation'];
$Montant_Ope=$_POST['Montant_Ope'];    




//La commande sql d'insertion


$requete = mysqli_query($bdd,"INSERT INTO operation VALUES('$Num_Ope', '$Num_Cpt', '$Type_Ope', '$Date_Ope', '$Validation', '$Montant_Ope',NULL) ");
	if($requete === false)
  {
   	 	echo 'Error d insertion dans la base ';
    		echo mysqli_error($bdd);
	} else{
        echo 'Opération enregistré avec succé - Merci-Bravo';
	}


}
?>