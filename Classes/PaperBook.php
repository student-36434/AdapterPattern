<?php

namespace Classes;
//
include_once __DIR__ . '/BookInterface.php';

class PaperBook implements BookInterface
{
    private int $page;
    private int $totalPages;

    public function __construct(int $totalPages) {
        $this->totalPages = $totalPages;
    }

    public function open(): void
    {
        $this->page = 1;
    }

    public function turnPage(): void
    {
        if($this->totalPages == $this->page) {
            return;
        }

        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}