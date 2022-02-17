<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacityStorage;
    private int $cargo;

    public function __construct(string $color, int $nbSeats, int $capacityStorage, int $cargo)
    {
        parent::__construct($color, $nbSeats);
        $this->setCapacityStorage($capacityStorage);
        $this->setCargo($cargo);
    }

    /**
     * @return int
     */
    public function getCargo(): int
    {
        return $this->cargo;
    }

    /**
     * @return int
     */
    public function getCapacityStorage(): int
    {
        return $this->capacityStorage;
    }

    /**
     * @param int $capacityStorage
     */
    public function setCapacityStorage(int $capacityStorage): void
    {
        $this->capacityStorage = $capacityStorage;
    }

    /**
     * @param string $cargo
     */
    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function isFull(): string
    {
        if ($this->getCargo() <= $this->getCapacityStorage()) {
            return "In filling";
        } else {
            return "is Full";
        }
    }

}
