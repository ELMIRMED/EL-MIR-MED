 <?php include("head.php");?>

<?php
include("connexion.php");    
$Num_Ope= $_GET['Num_Ope'] ;
//La commande sql de selection                                          
$requete = mysqli_query($bdd, "select * from operation where Num_Ope = '$Num_Ope'");
$ligne = mysqli_fetch_assoc($requete);


?>


<!DOCTYPE html>
<html>
<head>
<title>inscription</title>
<meta charset="utf-8 iso-8859-1" />
</head>
<body>

<form action="ValiderModif.php" method="POST">
<pre>
   <h2>Modifier Op�ration </h2>
        Num�ro Op�ration  : <input type="text" name="Num_Ope" value="<?php echo($ligne['Num_Ope']) ;?>">
        Montant Op�ration : <input type="number" name="Montant_Ope" value="<?php echo($ligne['Montant_Ope']) ;?>">
        Date Op�ration    : <input type="date" name="Date_Ope" value="<?php echo($ligne['Date_Ope']) ;?>" >
        
        
        
        Type Op�ration   
                          <input type="radio" name="Type_Ope" value="C" <?php if($ligne['Type_Ope']=="C") { echo 'checked="checked"' ; } ?>>  Op�ration Cr�dit<BR>
                          <input type="radio" name="Type_Ope" value="D" <?php if($ligne['Type_Ope']=="D") { echo 'checked="checked"' ; } ?>>  Op�ration D�bit
                                                                                                                             
        Validation        
        
                          <input type="radio" name="Validation" value="non" <?php if($ligne['Validation']=="non") { echo 'checked="checked"' ; } ?>>  Op�ration Non Valid�e<BR>
                          <input type="radio" name="Validation" value="oui" <?php if($ligne['Validation']=="oui") { echo 'checked="checked"' ; } ?>>  Op�ration Valid�e
                          
                          
       Num�ro de Compte  : <input type="text" name="Num_Cpt" value="<?php echo($ligne['Num_Cpt']) ;?>">
		                 
               
                           <input type="submit" name="modifier" value="Modifier" > <input type="reset"  value="Supprimer" >
</pre>
</form>



</body>
</html>