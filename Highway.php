<?php

abstract class Highway
{
    protected array $currentVehicles = [];
    protected int $nbLane = 0;
    protected int $maxSpeed = 0;

    public function __construct ()
    {
    }

    public function setCurrentVehicles ($vehicle)
    {
        $this->currentVehicles [] = $vehicle;
    }

    public function getCurrentVehicles (): int
    {
        return count($this->currentVehicles);
    }

    public function setNbLane (int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getNbLane (): int
    {
        return $this->nbLane;
    }

    public function setMaxSpeed (int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed (): int
    {
        return $this->maxSpeed;
    }
    
    abstract protected function addVehicles (Vehicle $vehicle);
}