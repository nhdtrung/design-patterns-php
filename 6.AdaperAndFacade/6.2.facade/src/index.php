<?php

declare(strict_types=1);

require_once './../vendor/autoload.php';

use Components\Amplifier;
use Components\Tuner;
use Components\DvdPlayer;
use Components\CdPlayer;
use Components\Projector;
use Components\TheaterLights;
use Components\Screen;
use Components\PopcornPopper;

$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer();
$projector = new Projector();
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();

$homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $screen, $lights, $popper);

$homeTheater->watchMovie("3 idiots - 2009");
echo PHP_EOL;
$homeTheater->endMovie();
