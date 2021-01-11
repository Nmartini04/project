<?php
function connectdb()
{
    // Connexion à la BDD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=coiffure;charset=utf8', 'root', '');
        return $bdd;
    }
    // Si la connexion ne se fait pas = message d'erreur
    catch (Exception $e) {
        die('Connexion impossible...');
    }
}


$bdd = connectdb();

$code = $_GET['id'];

$sql = "SELECT * FROM prestations WHERE id = '$code'";

$ps = $bdd->prepare($sql);

$param = array($code);

$res = $ps->execute($param);

$result = $ps->fetch();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>



    <div class="container pt-5">

        <div class="panel panel-info espace">

            <div class="panel-heading">
                <h3>Modification des prix</h3>
            </div>

            <div class="panel-body">
                <form action="traitements_formulaires/prix_form.php" method="POST" enctype="multipart/form-data">

                    <div class="form-groupe">
                        <input class="form-control" type="" id="id" value="<?= $code ?>" name="id">
                    </div>

                    <div class="form-groupe">
                        <label class="control-label" for="nom">Titre : </label>
                        <input class="form-control" type="text" id="nom" value="<?= $result['nom'] ?>" name="nom">
                    </div>

                    <div class="form-groupe">
                        <label class="control-label" for="email">Prix : </label>
                        <input class="form-control" type="text" id="text" value="<?= $result['prix'] ?>" name="prix">
                    </div>


                    <div class="form-groupe">
                        <button name="btn_modif" type="submit">Mise a jour</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>