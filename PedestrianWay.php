<?php

require_once 'HighWay.php';


final class PedestrianWay extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function __construct()
    {
        parent::__construct($this->nbLane, $this->maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $message = "Ce véhicule n'est pas autorisé";
        } else {
            $this->actualVehicle [] = $vehicle;
            $message = "Ce véhicule est autorisé";
        }
        return $message;
    }
}
