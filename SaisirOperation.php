 <?php include("head.php");?>    

<!DOCTYPE html>
<html>
<head>
<title>inscription</title>
<meta charset="utf-8 iso-8859-1" />
</head>
<body>

<form action="AjouterOperation.php" method="POST">

<pre>
                                                        <h2>Ajouter Op�ration :  </h2>
     
        Num�ro Op�ration  : <input type="text" name="Num_Ope">
        Montant Op�ration : <input type="number" name="Montant_Ope" value =0>
        Date Op�ration    : <input type="date" name="Date_Ope" value = <?php echo date('Y-m-d'); ?> >
        Type Op�ration    
                          <input type="radio" 	name="Type_Ope" value="C" checked> Op�ration Cr�dit<BR> 
                          <input type="radio" 	name="Type_Ope" value="D"> Op�ration D�bit
        
        Validation        	
                          
                          <input type="radio" 	name="Validation" value="non" checked> Op�ration Non Valid�e<BR> 
                          <input type="radio" 	name="Validation" value="oui"> Op�ration Valid�e
		                 

        <label for="Num_Cpt">Num�ro de Compte : </label> <SELECT name="Num_Cpt">     
<?php
include("connexion.php");

$requete = mysqli_query($bdd, "select Num_Cpt , Nom_Clt from compte order by Nom_Clt");
while($ligne = mysqli_fetch_assoc($requete))
{
?>

<option value='<?php echo $ligne['Num_Cpt'];?>'> <?php echo $ligne['Nom_Clt'];?> <?php echo $ligne['Num_Cpt'];?></option>\n";
          
<?php 
}

?>
</SELECT>

            
                            <input type="submit" name="enregistrer" value="Envoyer" > <input type="reset"  value="Supprimer" >
</pre>
</form>



</body>
</html>