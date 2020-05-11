<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{   
    protected $cars = [];
    
    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->lapLength = $lapLength;
        $this->lapNumber = $lapsNumber;
    }

    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    public function getLapsNumber(): int
    {
        return $this->lapNumber;
    }

    public function add(Car $car): void
    {
       $this->cars[] = $car;
    }

    public function all(): array
    {
        return $this->cars;
    }

    public function run(): Car
    {
        $winner = null;
        $minTime = null;
        $trackDstance = $this->getLapLength() * $this->getLapsNumber() * 1000;
        foreach($this->cars as $car) {
            $carDistance = ($car->getFuelTankVolume() / $car->getFuelConsumption()) * 100000;
            $timePit = ceil($trackDstance / $carDistance) * $car->getPitStopTime();
            $carTime = $trackDstance / ($car->getSpeed() * 1000 / 3600)  + $timePit;
            if(!$minTime || $minTime > $carTime) {
                $minTime = $carTime;
                $winner = $car;
            }
        }
       
        return $winner;
    }
}
