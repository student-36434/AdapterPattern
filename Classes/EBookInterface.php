<?php

namespace Classes;

interface EBookInterface
{
    public function unlock(): void;

    public function pressNext(): void;

    /**
     * @return int[]
     */
    public function getPage(): array;
}