<?php

namespace App;

class Guitar
{
    public int $strings= 6;
    public string $color;
    public bool $electric;

    
    public function __construct(string $color, bool $electric)
    {
        $this->color = $color;
        $this->electric = $electric;
    }

    public function play()
    {
        return "Soy una guitarra de {$this->strings} cuerdas";
    }
}

?>