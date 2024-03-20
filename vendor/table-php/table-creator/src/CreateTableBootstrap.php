<?php

namespace YdcTableCreator;

use YdcTableCreator\interfaces\CreateTable;

class CreateTableBootstrap implements CreateTable
{
    public function draw(TableData $tableData){
        echo '<table class="table table-striped table-hover table-bordered ">';

        // Render headers
        echo '<thead class="thead-dark">';
        echo '<tr>';
        foreach ($tableData->headers as $header) {
            echo '<th>' . $header . '</th>';
        }
        echo '</tr>';
        echo '</thead>';

        // Render data
        echo '<tbody >';
        foreach ($tableData->data as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';

        echo '</table>';
    }
}