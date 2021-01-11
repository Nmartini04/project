<?php

include_once '../../models/realisation_model.php';


$id = $_GET['id'];
$pricingController = new Images();
$image = $pricingController->suppRea($id);

header('Location: ../backoffice');

