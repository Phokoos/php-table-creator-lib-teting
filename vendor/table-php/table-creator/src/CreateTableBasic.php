<?php

namespace YdcTableCreator;

use YdcTableCreator\interfaces\CreateTable;
 
class CreateTableBasic implements CreateTable
{
     public function draw(TableData $tableData){
         echo '<table class="ydc-table">';

         // Render headers
         echo '<thead><tr class="ydc-table-row">';
         foreach ($tableData->headers as $header) {
             echo '<th class="ydc-table-header">' . $header . '</th>';
         }
         echo '</tr></thead>';

         // Render data
         echo '<tbody>';
         foreach ($tableData->data as $row) {
             echo '<tr class="ydc-table-row">';
             foreach ($row as $value) {
                 echo '<td class="ydc-table-data">' . $value . '</td>';
             }
             echo '</tr>';
         }
         echo '</tbody>';

         echo '</table>';
     }
 }
