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
                                                        <h2>Ajouter Opération :  </h2>
     
        Numéro Opération  : <input type="text" name="Num_Ope">
        Montant Opération : <input type="number" name="Montant_Ope" value =0>
        Date Opération    : <input type="date" name="Date_Ope" value = <?php echo date('Y-m-d'); ?> >
        Type Opération    
                          <input type="radio" 	name="Type_Ope" value="C" checked> Opération Crédit<BR> 
                          <input type="radio" 	name="Type_Ope" value="D"> Opération Débit
        
        Validation        	
                          
                          <input type="radio" 	name="Validation" value="non" checked> Opération Non Validée<BR> 
                          <input type="radio" 	name="Validation" value="oui"> Opération Validée
		                 

        <label for="Num_Cpt">Numéro de Compte : </label> <SELECT name="Num_Cpt">     
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