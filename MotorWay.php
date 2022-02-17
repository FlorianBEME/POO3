<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function __construct()
    {
        parent::__construct($this->nbLane, $this->maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $message = "Ce véhicule n'est pas autorisé";
        } else {
            $this->actualVehicle [] = $vehicle;
            $message = "Ce véhicule est autorisé";
        }
        return $message;
    }
}
