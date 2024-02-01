<?php

class Pants extends Product implements HasSize
{
    use sizeTrait;

    protected const size_range=['start'=>30 , 'end'=>60];
    protected int $size;

    public function __construct(string $name, int $price, array $options, int $size)
    {
        $this->setSize($size);
        parent::__construct($name, $price, $options);
    }


    public function sizeIsValid($size): bool
    {
        return $size % 2 == 0 && $size>= Pants::size_range['start'] && $size<=Pants::size_range['end'];
    }


}