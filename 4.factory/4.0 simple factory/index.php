<?php
require('DevelopersFactory.php');

$developersFactory = new DevelopersFactory();
$developersFactory->produceDeveloper('Ruby');

$developersFactory = new DevelopersFactory();
$developersFactory->produceDeveloper('Php');
