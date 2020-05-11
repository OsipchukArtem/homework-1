<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public function present(Track $track): string
    {
        $html = '';
        foreach($track->all() as $car) {
            $html .= '<img src="'.$car->getImage().'">';
            $html .= '</br>';
            $html .= $car->getName().': '.$car->getSpeed().', '.$car->getPitStopTime();
            $html .= '</br>';
        }

        return $html;
    }
}
