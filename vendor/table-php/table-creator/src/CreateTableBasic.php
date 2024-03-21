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

         // Render pagination
         if($tableData->pagination)
         {
             $totalPages = ceil($tableData->totalItems / $tableData->itemsPerPage);
             $visiblePages = 5; // обмежте кількість відображених сторінок
             $startPage = max(1, min($tableData->currentPage - floor($visiblePages / 2), $totalPages - $visiblePages + 1));
             $endPage = min($totalPages, max($tableData->currentPage + ceil($visiblePages / 2) - 1, $visiblePages));

             echo "<nav>";
             echo "<ul class='pagination'>";
             if ($tableData->currentPage > 1)
             {
                 echo "<li class='page-item'><a class='page-link' href='?page=1'>First</a></li>"; // "Перша" стрілка (<<)
                 echo "<li class='page-item'><a class='page-link' href='?page=" . ($tableData->currentPage - 1) . "'>&laquo;</a></li>"; // "Попередня" стрілка (<)
             }
             for($i = $startPage; $i <= $endPage; $i++)
             {
                 $activeClass = $i == $tableData->currentPage ? "active" : "";
                 echo "<li class='page-item {$activeClass}'><a class='page-link' href='?page={$i}'>{$i}</a></li>";
             }
             if ($tableData->currentPage < $totalPages)
             {
                 echo "<li class='page-item'><a class='page-link' href='?page=" . ($tableData->currentPage + 1) . "'>&raquo;</a></li>"; // "Наступна" стрілка (>)
                 echo "<li class='page-item'><a class='page-link' href='?page={$totalPages}'>Last</a></li>";
             }
             echo "</ul>";
             echo "</nav>";
         }
     }
 }
