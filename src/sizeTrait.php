<?php

trait sizeTrait
{
    public function setSize($size)
    {
        if ($this->sizeIsValid($size)){
            $this->size = $size;
            return $this;
        }
        return false;
    }

    public function getSize(): string|int
    {
        return $this->size;
    }
}