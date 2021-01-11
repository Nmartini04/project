<?php
include_once '../_config/bdd.php';
include_once '../models/connectdb_model.php';
include_once '../models/pricing_model.php';
include_once '../models/realisation_model.php';

$pricingController = new Pricing();
$imageController = new Images(); ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media.css">
    <script src="../assets/js/app.js"></script>
</head>

<body>
    <header class="d-flex justify-content-center align-items-center ">

        <h1 class=" backoff text-center text-white">BACK-OFFICE</h1>
    </header>


    <div class="container bg pt-5">
        <h1 class="pb-5 text-center"> Modification des prix</h1>
        <table class="table table-hover table-striped">
            <button type="button" class="btn btn-success "><a class="text-white" href="ajout_prix.php"><i class="far fa-plus-square"></i></a></button>
            <h3 class="pt-5">Catégorie styliste</h3>
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricingController->GetPriceStyliste() as $s) { ?>
                    <tr>
                        <td><?= $s->nom ?></td>
                        <td><?= $s->prix.'€' ?></td>
                        <td><button class="btn btn-warning"><a href="modification_prix?id=<?= $s->id ?>"><i class="fas fa-edit"></i></a></button></td>
                        <td><button onclick="return confirm('Etes vous sur de supprimer ?')" name="suppPrix" class="btn btn-danger"><a href="./traitements_formulaires/supp_prix.php?id=<?= $s->id ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <table class="table table-striped table-hover">
            <h3 class="pt-5">Catégorie Coloriste</h3>
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricingController->GetPriceColoriste() as $s) { ?>
                    <tr>
                        <td><?= $s->nom ?></td>
                        <td><?= $s->prix.'€' ?></td>
                        <td><button class="btn btn-warning"><a href="modification_prix?id=<?= $s->id ?>"><i class="fas fa-edit"></i></a></button></td>
                        <td><button onclick="return confirm('Etes vous sur de supprimer ?')" name="suppPrix" class="btn btn-danger"><a href="./traitements_formulaires/supp_prix?id=<?= $s->id ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <table class="table table-striped table-hover">
            <h3 class="pt-5">Catégorie Traitement</h3>
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricingController->GetPriceTraitements() as $t) { ?>
                    <tr>
                        <td><?= $t->nom ?></td>
                        <td><?= $t->prix.'€' ?></td>
                        <td><button class="btn btn-warning"><a href="modification_prix?id=<?= $t->id ?>"><i class="fas fa-edit"></i></a></button></td>
                        <td><button onclick="return confirm('Etes vous sur de supprimer ?')" name="suppPrix" class="btn btn-danger"><a href="./traitements_formulaires/supp_prix?id=<?= $t->id ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>



        <table class="table table-striped table-hover">
            <h3 class="pt-5">Catégorie Evenements</h3>
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricingController->GetPriceEvenements() as $s) { ?>
                    <tr>
                        <td><?= $s->nom ?></td>
                        <td><?= $s->prix.'€' ?></td>
                        <td><button class="btn btn-warning"><a href="modification_prix?id=<?= $s->id ?>"><i class="fas fa-edit"></i></a></button></td>
                        <td><button onclick="return confirm('Etes vous sur de supprimer ?')" name="suppPrix" class="btn btn-danger"><a href="./traitements_formulaires/supp_prix?id=<?= $s->id ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h1 class="pb-5 pt-5 text-center">Modification des images</h1>
        <table class="table table-striped table-hover">

            <button type="button" class="btn btn-success"><a href="ajout_rea"><i class="far fa-plus-square"></i></a></button>
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">titre</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imageController->GetAllImages() as $i) { ?>
                    <tr>
                        <td><img src="../assets/img/realisation/<?= $i->image; ?>" alt="img"></td>
                        <td><?= $i->titre; ?></td>
                        <td><?= $i->description; ?></td>
                        <td><button class="btn btn-warning"><a href="modification_images?id=<?= $i->id ?>"><i class="fas fa-edit"></i></a></button></td>
                        <td><button onclick="return confirm('Etes vous sur de supprimer ?')" class="btn btn-danger"><a href="./traitements_formulaires/supp_rea?id=<?= $i->id ?>"><i class="fas fa-trash-alt"></i></a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>