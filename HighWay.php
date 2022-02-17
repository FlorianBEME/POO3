<?php

abstract class HighWay
{
    protected array $actualVehicle;
    private int $nbLane = 0;
    private int $maxSpeed = 0;

    abstract public function addVehicle(Vehicle $vehicle);


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return array
     */
    public function getActualVehicle(): array
    {
        return $this->actualVehicle;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param array $actualVehicle
     */
    public function setActualVehicle(array $actualVehicle): void
    {
        $this->actualVehicle = $actualVehicle;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }


}
