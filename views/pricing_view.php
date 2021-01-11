<!DOCTYPE html>
<html lang="fr">
<?php include_once 'views/includes/head.php';
$pricingController = new Pricing(); ?>

<body>
    <?php include_once 'views/includes/header_pricing.php'; ?>

    <main>

        <div class="pricing">
            <h2 class="titleprix">Make It</h2>
            <h1>STYLISTE</h1>
            <div class="prix">
                <?php foreach ($pricingController->GetPriceStyliste() as $s) { ?>

                    <div class="item ">
                        <p><?= $s->nom ?></p>
                        <span class="dotted"></span>
                        <p><?= $s->prix.'€' ?></p>
                    </div>

                <?php } ?>
            </div>
        </div>
        <div class="pricing2">


            <div class="price">
                <h1>TRAITEMENT</h1>
                <?php foreach ($pricingController->GetPriceTraitements() as $t) { ?>

                    <div class="item ">
                        <p><?= $t->nom ?></p>
                        <span class="dotted"></span>
                        <p><?= $t->prix.'€' ?></p>
                    </div>

                <?php } ?>
            </div>

            <div class="price">
                <h1>COLORISTE</h1>
                <?php foreach ($pricingController->GetPriceColoriste() as $c) { ?>

                    <div class="item ">
                        <p><?= $c->nom ?></p>
                        <span class="dotted"></span>
                        <p><?= $c->prix.'€' ?></p>
                    </div>

                <?php } ?>
            </div>

            <div class="price">
                <h1>EVENEMENT</h1>
                <?php foreach ($pricingController->GetPriceEvenements() as $e) { ?>

                    <div class="item ">
                        <p><?= $e->nom ?></p>
                        <span class="dotted"></span>
                        <p><?= $e->prix.'€' ?></p>
                    </div>

                <?php } ?>
            </div>

        </div>



    </main>
    <?php include_once 'views/includes/footer.php'; ?>

</body>

</html>