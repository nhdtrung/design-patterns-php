<?php

use \Components\Amplifier;
use \Components\Tuner;
use \Components\DvdPlayer;
use \Components\CdPlayer;
use \Components\Projector;
use \Components\TheaterLights;
use \Components\Screen;
use \Components\PopcornPopper;

class HomeTheaterFacade
{
    /**
     * @var Amplifier
     */
    private $amp;

    /**
     * @var Tuner
     */
    private $tuner;

    /**
     * @var DvdPlayer
     */
    protected $dvd;
    /**
     * @var CdPlayer
     */
    private $cd;

    /**
     * @var Projector
     */
    private $projector;

    /**
     * @var TheaterLights
     */
    private TheaterLights $lights;

    /**
     * @var Screen
     */
    private Screen $screen;

    /**
     * @var PopcornPopper
     */
    private $popper;

    /**
     * @param Amplifier $amp
     * @param Tuner $tuner
     * @param DvdPlayer $dvd
     * @param CdPlayer $cd
     * @param Projector $projector
     * @param Screen $screen
     * @param TheaterLights $lights
     * @param PopcornPopper $popper
     */
    public function __construct(
        Amplifier     $amp,
        Tuner         $tuner,
        DvdPlayer     $dvd,
        CdPlayer      $cd,
        Projector     $projector,
        Screen        $screen,
        TheaterLights $lights,
        PopcornPopper $popper
    )
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    /**
     * @param string $movie
     */
    public function watchMovie(string $movie)
    {
        echo "Get ready to watch a movie..." . PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    /**
     * End movie
     */
    public function endMovie()
    {
        echo "Shutting movie theater down... " . PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}