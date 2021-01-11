
<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>



    <div class="container pt-5">

        <div class="panel panel-info espace">

            <div class="panel-heading">
                <h3>Ajouter une realisation</h3>
            </div>

            <div class="panel-body">
                <form action="traitements_formulaires/ajoutR.php" method="POST" enctype="multipart/form-data">


                    <div class="form-groupe">
                        <label class="control-label" for="nom">Titre : </label>
                        <input class="form-control" type="text" id="nom" name="titre">
                    </div>

                    <div class="form-groupe">
                        <label class="control-label" for="email">Description : </label>
                        <input class="form-control" type="text" id="text" name="description">
                    </div>
                    
                    <div class="form-groupe">
                        <label class="control-label" for="photo">photo : </label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>



                    <div class="form-groupe">
                        <button class="mt-3" name="btn_ajoutR" type="submit">Valider</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>