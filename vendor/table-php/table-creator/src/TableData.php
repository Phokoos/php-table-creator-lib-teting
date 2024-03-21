<?php

namespace YdcTableCreator;

class TableData
{
    public $headers;
    public $data;
    public $pagination = true; // Встановіть в true, щоб включити пагінацію
    public $itemsPerPage = 10; // Кількість елементів на сторінку
    public $totalItems = 100; // Загальна кількість елементів
    public $currentPage = 1; // Поточна сторінка

    public function __construct($headers, $data, $pagination = false, $itemsPerPage = 20, $totalItems = 100, $currentPage = 2)
    {
        $this->headers = $headers;
        $this->data = $data;
        $this->pagination = $pagination;
        $this->itemsPerPage = $itemsPerPage;
        $this->totalItems = $totalItems;
        $this->currentPage = $currentPage;
    }

}