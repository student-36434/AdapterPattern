<?php

namespace Classes;

include_once __DIR__ . '/EBookInterface.php';
include_once __DIR__ . '/BookInterface.php';

class EBookAdapter implements BookInterface
{
    protected EBookInterface $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open(): void
    {
        $this->eBook->unlock();
    }

    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}