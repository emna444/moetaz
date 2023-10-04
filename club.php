<!DOCTYPE html>
<html lang="en">
<head>
<style>
	
    table,th,td{border:1px solid #cccccc}
      </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php

class Club
{ 
    Private $id;
    Private $nom;
    Private $description;
    Private $adresse;
    Private $domaine;
 
public function setId(string $id)
{ $this->id=$id;

}
public function setNom(string $nom)
{ $this->nom=$nom;

}
public function setDes(string $description)
{ $this->description=$description;

}
public function setad(string $adresse)
{ $this->adresse=$adresse;

}
public function setdom(string $domaine)
{ $this->domaine=$domaine;

}

public function getid():string {
    return $this->id;
}
public function getnom():string {
    return $this->nom;
}
public function getdes():string {
    return $this->description;
}
public function getad():string {
    return $this->adresse;
}
public function getdom():string {
    return $this->domaine;
}

function afficherClub()
{ ?> 
<table>
    <tr>
      <th>ID</th>
      <th>NOM</th>
      <th>ADRESSE</th>
      <th>DESCRI</th>
      <th>DOMAINE</th>

    </tr>
    <tr>
          <td><?php echo $this->id ?> </td>
          <td><?php echo $this->nom?> </td>
		  <td><?php echo $this -> adresse?> </td>
		  <td><?php echo $this ->description?> </td>
		  <td><?php echo $this ->domaine?> </td>




        </tr>
    <?php
    
    
    
    echo "Id: ".$this->id. "<br>";
    echo "nom: ".$this->nom. "<br>";
    echo "description: ".$this->description. "<br>";
    echo "adresse: ".$this->adresse. "<br>";
    echo "domaine: ".$this->domaine. "<br>";

}


public function __construct(string $id,string $nom,string $description,string $adresse,string $domaine) {
    $this->id = $id;
    $this->nom = $nom;
    $this->description = $description;
    $this->adresse = $adresse;
    $this->domaine = $domaine;


}



}
?>


</body>
</html>