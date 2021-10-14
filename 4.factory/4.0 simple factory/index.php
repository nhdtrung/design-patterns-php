<?php

declare(strict_types=1);

require('DevelopersFactory.php');
$developersFactory = new DevelopersFactory();
$developersFactory->produceDeveloper('Ruby');
$developersFactory = new DevelopersFactory();
$developersFactory->produceDeveloper('Php');
