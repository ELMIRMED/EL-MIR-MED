 <?php include("head.php");?>

<?php
include("connexion.php");
 ?>
 


<?php

//:::::::     Facultative isset � D�termine si une variable est d�finie et est diff�rente de NULL
if (isset ($_POST['chercher'])){




//On r�cup�re les valeurs entr�es par l'utilisateur :
$Nom_Clt=$_POST['Nom_Clt'];





//La commande sql de selection 
$requete = mysqli_query($bdd, "select * from compte where Nom_Clt like '%$Nom_Clt%'");



//:::::::      Facultative requete pour r�cuprere le nombre des employes 



?>

<html>
<head>
<title> Recherche </title>
<meta charset="utf-8 iso-8859-1" />
</head>
<body>
<font size="5">Le comptes qui correspondent � votre recherche du client " <?php echo $Nom_Clt; ?> " </font><b><font face="Garamond"><u><p>
<br>
</p>
<table border="1" width="100%" bordercolorlight="#FFFFF" bordercolordark="#FFFFFF">
	<tr>
	  <td width="194" bgcolor="#C0C0C0"> Num�ro Compte       </td>
		<td width="164" bgcolor="#C0C0C0"> Num�ro Client       </td>
		<td width="149" bgcolor="#C0C0C0"> Nom du Client    </td>
		<td width="135" bgcolor="#C0C0C0"> Type Compte    </td>
    <td width="194" bgcolor="#C0C0C0"> Solde Bancaire    </td>
    <td width="164" bgcolor="#C0C0C0"> Solde R�el      </td>

                                                   
<!-- R�cuperer le resultat de la requete dans un tableau -->                                                  
	</tr>
  <p><?php while($ligne = mysqli_fetch_assoc($requete)) { ?> </p>
	<tr>
		<td width="194" bgcolor="#FFCCFF"><?php echo $ligne['Num_Cpt']; ?></td>
		<td width="164" bgcolor="#CCCCFF"><?php echo $ligne['Num_Clt']; ?></td>
		<td width="149" bgcolor="#FFCCFF"><?php echo $ligne['Nom_Clt']; ?></td>
		<td width="135" bgcolor="#CCCCFF"><?php echo $ligne['Type_Cpt']; ?></td>
    <td width="194" bgcolor="#FFCCFF"><?php echo $ligne['Solde_Bancaire']; ?></td>
    <td width="164" bgcolor="#CCCCFF"><?php echo $ligne['Solde_Reel']; ?></td>                                                                                                                                         
	</tr>
	<?php } ?> 
</table>
</body>
</html>
<?php } ?> 