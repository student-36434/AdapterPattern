<?php

namespace Classes;

include_once __DIR__ . '/EBookInterface.php';

class EBook implements EBookInterface
{
    private int $page = 1;
    private int $totalPages;

    public function __construct(int $totalPages) {
        $this->totalPages = $totalPages;
    }

    public function unlock(): void
    {
    }

    public function pressNext(): void
    {
        if($this->totalPages == $this->page) {
            return;
        }

        $this->page++;
    }

    /**
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}