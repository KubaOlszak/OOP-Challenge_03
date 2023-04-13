<?php

require_once 'Highway.php';

final class Pedestrianway extends Highway
{
    protected array $currentVehicles = [];
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicles(Vehicle $vehicle)
    {
        if (($vehicle instanceof Car) || ($vehicle instanceof Bicycle)) {
            $this->setCurrentVehicles($vehicle);
            return "Vous pouvez y aller";
        }
        return "Voie interdite !";
    }
}
