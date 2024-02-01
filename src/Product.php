<?php


class Product
{

    public string $name;
    protected int $price;
    protected array $options=[];

    public function __construct(string $name, int $price, array $options)
    {
        $this->name = $name;
        $this->price = $price;
        $this->options = $options;
    }


    public function getPrice(): int
    {
        return $this->price;
    }


    public function getOptions(): array
    {
        return $this->options;
    }


}