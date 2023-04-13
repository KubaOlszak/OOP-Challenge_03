<?php

require_once 'Highway.php';

final class Residentialway extends Highway
{
    protected array $currentVehicles = [];
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicles(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
