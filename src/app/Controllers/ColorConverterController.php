<?php

namespace App;

class ColorConverterController
{
    public function inputCheck(): void
    {
        if (isset($_GET['convert'])) {

            $red = $this->getColor(color: 'red');
            $green = $this->getColor(color: 'green');
            $blue = $this->getColor(color: 'blue');

            if (empty($_GET['rgb'] | $red | $green | $blue)) {
                header(header: 'index.php');
            }

            if ($red > 255 | $green > 255 | $blue > 255) {
                header(header: 'index.php');
            }
        }
    }

    private function getColor($color): string
    {
        if (isset($_GET[$color])) {
            return (string)(int)$_GET[$color];
        }
        return '0';
    }

    public function rgbToHex(): string
    {
        $red = $this->getColor(color: 'red');
        $green = $this->getColor(color: 'green');
        $blue = $this->getColor(color: 'blue');
        return sprintf("#%02x%02x%02x", $red, $green, $blue);
    }
}
