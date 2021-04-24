<?php

namespace Classes;

interface BookInterface
{
    public function turnPage(): void;

    public function open(): void;

    public function getPage(): int;
}