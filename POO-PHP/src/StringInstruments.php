<?php
namespace App;

abstract class StringInstruments
{
    protected int $strings;
    private string $color;
    private bool $electric;

    public function __construct(string $color, bool $electric)
    {
        $this->color = $color;
        $this->electric = $electric;
    }
}
?>