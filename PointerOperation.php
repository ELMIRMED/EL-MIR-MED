 <?php include("head.php");?>

<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
    include("connexion.php");
    //requête SQL:
    $sql = "c" ;
    $requete = mysqli_query($bdd, "SELECT *  FROM operation ORDER BY Date_Ope Desc");    
 
  
 
    
  ?>
                                                                                                                        
                                                                                                                        
                                                                                                                        
  <table border="1" width="100%" bordercolorlight="#FFFFF" bordercolordark="#FFFFFF">                                    
	<tr>                                                                                                                   
	  <td width="194" bgcolor="#C0C0C0"> Numéro opération        </td>                                                     
		<td width="164" bgcolor="#C0C0C0"> Numéro Compte       </td>                                                          
		<td width="164" bgcolor="#C0C0C0"> Type Opération    </td>                                                            
		<td width="164" bgcolor="#C0C0C0"> Date Opéation    </td>
    <td width="194" bgcolor="#C0C0C0"> Validation    </td>
    <td width="164" bgcolor="#C0C0C0"> Montant Opéation      </td>
    <td width="164" bgcolor="#C0C0C0"> Date Valeur      </td>
    <td width="164" bgcolor="#C0C0C0"> Modifier Opéation      </td>
                                                   
<!-- Récuperer le resultat de la requete dans un tableau -->                                                  
	</tr>
  <p><?php while($ligne = mysqli_fetch_assoc($requete)) { ?> </p>
	<tr>
		<td width="194" bgcolor="#CCCCFF"><?php echo $ligne['Num_Ope'] ; ?></td>
		<td width="164" bgcolor="#FFCCFF"><?php echo $ligne['Num_Cpt']; ?></td>
		<td width="164" bgcolor="#CCCCFF"><?php echo $ligne['Type_Ope']; ?></td>
		<td width="164" bgcolor="#FFCCFF"><?php echo $ligne['Date_Ope']; ?></td>
    <td width="194" bgcolor="#CCCCFF"><?php echo $ligne['Validation']; ?></td>
    <td width="164" bgcolor="#FFCCFF"><?php echo $ligne['Montant_Ope']; ?></td> 
    <td width="164" bgcolor="#CCCCFF"><?php echo $ligne['Date_Valeur']; ?></td>     
    <td width="164" bgcolor="#FFCCFF"><?php echo ( "<a href=\"ModifierOperation.php?Num_Ope=". $ligne['Num_Ope']. "\">modifier</a>") ; ?></td>                                                                                                                                    
	</tr>
	<?php } ?> 
</table>
</body>
</html>