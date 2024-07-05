<?php
declare(strict_types=1);

namespace Core;

class Controller
{
    protected function view(string $view, array $data = [])
    {
        extract($data);
        require "../app/Views/$view.php";
    }
}