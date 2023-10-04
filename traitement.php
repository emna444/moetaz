<!DOCTYPE html>
<html>
<style>
	
  table,th,td{border:1px solid #cccccc}
    </style>
  </head>
  <body>
  <?php

	 // si formulaire soumis
 


/* récupérer les données du formulaire en utilisant 
   la valeur des attributs name comme clé 
*/
$id = $_GET['id']; 
$nom = $_GET['nom']; 
$adresse = $_GET['adresse'];
$description = $_GET['description'];
$domaine = $_GET['dom'];

// afficher le résultat
echo '<h3>Informations récupérées en utilisant GET</h3>'; 

?>
<table>
        <tr>
          <th>ID</th>
          <th>NOM</th>
		  <th>ADRESSE</th>
          <th>DESCRI</th>
          <th>DOMAINE</th>

        </tr>
        <tr>
          <td><?php echo $id?> </td>
          <td><?php echo $nom?> </td>
		  <td><?php echo $adresse?> </td>
		  <td><?php echo $description?> </td>
		  <td><?php echo $domaine?> </td>




        </tr>
     
    </tbody> 
	</body>
	<?php 
 ?>
</html>

