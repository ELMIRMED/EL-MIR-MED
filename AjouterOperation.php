 <?php include("head.php");?>

<?php
include("connexion.php");
?>
<?php

// Facultative :: isset � D�termine si une variable est d�finie et est diff�rente de NULL
if (isset ($_POST['enregistrer']))
{
// Facultative ::



//On r�cup�re les valeurs entr�es par l'utilisateur :


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
        echo 'Op�ration enregistr� avec succ� - Merci-Bravo';
	}


}
?>