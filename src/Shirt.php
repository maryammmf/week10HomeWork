<?php

class Shirt extends Product implements HasSize
{
    use sizeTrait;

    protected const valid_size=['sm' , 'md' , 'lg' , 'xlg' , '2xlg'];
    protected string $size;

    public function __construct(string $name, int $price, array $options , string $size)
    {
        $this->setSize($size);
        parent::__construct($name, $price, $options);
    }

    public function sizeIsValid($size): bool
    {
        return in_array($size , Shirt::valid_size);
    }


}