<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Color;

class ColorConverterController extends Controller
{
    private Color $color;

    public function __construct()
    {
        $this->color = new Color();
    }

    public function inputCheck(): array
    {
        if (isset($_GET['convert'])) {
            $red = $this->color->getColor('red');
            $green = $this->color->getColor('green');
            $blue = $this->color->getColor('blue');

            if (empty($_GET['rgb']) || empty($red) || empty($green) || empty($blue)) {
                header('Location: /');
                exit;
            }

            if ($red > 255 || $green > 255 || $blue > 255) {
                header('Location: /');
                exit;
            }
            return ['red' => $red, 'green' => $green, 'blue' => $blue];
        }
        return ['red' => '', 'green' => '', 'blue' => ''];
    }

    public function rgbToHex(array $colors): string
    {
        $red = $colors['red'];
        $green = $colors['green'];
        $blue = $colors['blue'];
        return sprintf("#%02x%02x%02x", $red, $green, $blue);
    }

    public function index(): void
    {
        $colors = $this->inputCheck();
        $hex = $this->rgbToHex($colors);
        $this->view('Index', ['hex' => $hex]);
    }
}