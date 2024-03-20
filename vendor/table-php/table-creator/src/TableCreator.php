<?php

namespace YdcTableCreator;

use YdcTableCreator\interfaces\CreateTable;

class TableCreator
{
    private $creator;

    public function __construct(CreateTable $creator)
    {
        $this->creator = $creator;
    }

    public function create(TableData $tableData)
    {
        $this->creator->draw($tableData);
    }
}

//class TableCreator
//{
//    private $headers;
//    private $data;
//
//    public function __construct($headers, $data) {
//        $this->headers = $headers;
//        $this->data = $data;
//    }
//
//    public function renderTable() {
//        echo '<table class="table" border="1">';
//
//        // Render headers
//        echo '<tr>';
//        foreach ($this->headers as $header) {
//            echo '<th>' . $header . '</th>';
//        }
//        echo '</tr>';
//
//        // Render data
//        foreach ($this->data as $row) {
//            echo '<tr>';
//            foreach ($row as $value) {
//                echo '<td>' . $value . '</td>';
//            }
//            echo '</tr>';
//        }
//
//        echo '</table>';
//    }
//}