<?php

require_once 'Highway.php';

final class Motorway extends Highway
{
    protected array $currentVehicles = [];
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicles(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
