<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>



    <div class="container pt-5">

        <div class="panel panel-info espace">

            <div class="panel-heading">
                <h3>Ajouter un prix</h3>
            </div>

            <div class="panel-body">
                <form action="traitements_formulaires/ajoutP.php" method="POST">


                    <div class="form-groupe">
                        <label class="control-label" for="nom">Titre : </label>
                        <input class="form-control" type="text" id="nom" name="nom">
                    </div>

                    <div class="form-groupe">
                        <label class="control-label" for="email">Prix : </label>
                        <input class="form-control" type="text" id="text" name="prix">
                    </div>

                    <div class="form-groupe">
                        <label class="control-label" for="email">categorie: </label>
                        <select name="style">
                            <option value="">--Choisir une categorie--</option>
                            <option value="styliste">Styliste</option>
                            <option value="coloriste">Coloriste</option>
                            <option value="traitements">Traitement</option>
                            <option value="evenements">Evenement</option>
                        </select>
                    </div>





                    <div class="form-groupe">
                        <button class="mt-3" name="btn_ajoutP" type="submit">Valider</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>