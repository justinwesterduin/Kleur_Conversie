<?php
declare(strict_types=1);

namespace Core;

class View
{
    public static function render(string $view, array $data = []): void
    {
        extract($data);
        require "../app/Views/$view.php";
    }
}