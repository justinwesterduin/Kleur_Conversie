<?php

namespace App\Models;

class Color
{
    public function getColor($color): string
    {
        if (isset($_GET[$color])) {
            return (string)(int)$_GET[$color];
        }
        return '0';
    }
}