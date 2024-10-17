



<?php  
include_once "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
if(isset($_POST['ajouter'])){
if(isset($_POST['nomart']) && isset($_POST['prix']) &&isset($_POST['idcom'])&& !empty($_POST['nomart'])&& !empty($_POST['prix'])&&!empty($_POST['idcom'])){
$sql = 'INSERT INTO article (idart,nomart,prix,idcom) VALUES(null,:nomart,:prix,:idcom)';
$req = $connexion->prepare($sql);
$req->execute([':nomart' => $_POST['nomart'] ,':prix' =>$_POST['prix'],':idcom' =>$_POST['idcom']]);
if($req){

header("location: liste.php");
}else {
echo "Employé non ajouté";
}
}else {

echo "Veuillez remplir tous les champs !";
}
}
?>
<div class="form">
<a href="liste-emp.php" > Retour</a>
<h2>Ajouter un art</h2>
<form action="" method="POST">
<label>nom &nbsp &nbsp &nbsp &nbsp </label>
<input type="text" name="nomart"><br><br>
<label>prix &nbsp &nbsp </label>
<input type="text" name="prix"><br><br>
<label>idcmd &nbsp &nbsp &nbsp &nbsp &nbsp </label>
<input type="number" name="idcom"><br><br>
<input type="submit" value="Ajouter" name="ajouter">
</form>
</div>
</body>
</html>
