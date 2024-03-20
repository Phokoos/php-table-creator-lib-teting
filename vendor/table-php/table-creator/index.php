<?php
require 'vendor/autoload.php';

use YdcTableCreator\CreateTableBootstrap;
use YdcTableCreator\TableCreator;
use YdcTableCreator\TableData;

$tableDataOne = new TableData(['Name', 'Age', 'Country'], [
    ['John', 25, 'USA'],
    ['Anna', 30, 'Canada'],
    ['Mark', 22, 'UK'],
]);
$creator = new TableCreator(new CreateTableBootstrap);
$creator->create($tableDataOne);
?>