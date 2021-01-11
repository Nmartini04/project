<?php


include_once '../../models/pricing_model.php';


        $id = $_GET['id'];
        $pricingController = new Pricing();
        $prestation = $pricingController->suppPrice($id);
        


header('Location: ../backoffice');

