<?php

class SimpsonsCars {
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function forward(): string
    {
        $this->currentSpeed = 50;

        return "Gogo !";
    }
    public function brake(): string
    {
        $brakeAlert = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $brakeAlert .= "Brake !";
        }
        $brakeAlert .= "I'm stopped !";
        return $brakeAlert;
    }
    public function start(): string
    {
        $this->currentSpeed = 20;
        return "I'm started";
    }
    public function getNbWheels(int $nbWheels): int
    {
        return $this->$nbWheels;
    }
    public function getCurrentSpeed(int $currentSpeed): int
    {
        return $this->currentSpeed;
    }
    public function getColor(string $color): string 
    {
        return $this->color;
    }
    public function getNbSeats(int $nbSeats): int
    {
        return $this->nbSeats;
    }
    public function getEnergy(string $energy): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(int $energyLevel): int
    {
        return $this->energyLevel;
    }
}

