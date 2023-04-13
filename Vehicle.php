<?php

class Vehicle
{
    protected int $nbWheels;
    protected int $currentSpeed;
    protected string $color;
    protected int $nbSeats;
    protected string $energy;
    protected int $energyLevel;

    public function __construct (string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }                                             
                                                    
    public function start()
    {
        return " Go ! <br>";
    }

    public function forward($currentSpeed): int
    {
        $this->currentSpeed = $currentSpeed;
        return $this->currentSpeed;
    }

    public function brake($vehicleName): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "$vehicleName Braking.. ";
        }
        $sentence .= "<br>The vehicle has stopped.<br><br>";
        return $sentence;
    }

    public function setColor (string $color): void
    {
        $this->color = $color;
    }

    public function getColor (): string
    {
        return $this->color;
    }

    public function setCurrentSpeed (int $speed): void
    {
        $this->currentSpeed = $speed;
    }

    public function getCurrentSpeed ()
    {
        return $this->currentSpeed;
    }
    
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}

