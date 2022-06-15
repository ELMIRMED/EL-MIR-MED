

<?php include("head.php");?>



<?php 

include("connexion.php"); 

$Num_Cpt=$_POST['Num_Cpt'];
$Num_Clt=$_POST['Num_Clt'];
$Nom_Clt=$_POST['Nom_Clt'];
$Type_Cpt=$_POST['Type_Cpt'];
$Solde_Bancaire=$_POST['Solde_Bancaire'];
$Solde_reel=$_POST['Solde_reel'];

$query=mysqli_query($bdd, "INSERT INTO compte (Num_Cpt , Num_Clt, Nom_Clt, Type_Cpt, Solde_Bancaire, Solde_Reel) VALUES('$Num_Cpt','$Num_Clt','$Nom_Clt','$Type_Cpt','$Solde_Bancaire','$Solde_reel')");

  

if(isset($query)){
    echo "<h1>INSERTION AVEC SUCCESS </h1> ";
}
else {
    echo "<h1>Erreur d insertion  </h1> ";
}
 ?>
