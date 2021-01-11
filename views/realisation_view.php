<!DOCTYPE html>
<html lang="fr">
<?php include_once 'views/includes/head.php'; 
$imageController = new Images();?>

<body>
    <?php include_once 'views/includes/header_acceuil.php'; ?>

    <main class="real">

        <h1>LAST REALISATION</h1>
        <h3>Fashion Look</h3>


        <div class="realisation">
            <?php foreach ($imageController->GetAllImages() as $i) { ?>
                <div class="card">
                    <img src="./assets/img/realisation/<?= $i->image; ?>" alt="img">
                    <div class="container_card">
                        <h4><b><?= $i->titre;?></b></h4>
                        <p><?= $i->description;?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>

    <?php include_once 'views/includes/footer.php'; ?>
</body>

</html>