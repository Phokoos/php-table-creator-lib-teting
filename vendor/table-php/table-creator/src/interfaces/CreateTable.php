<?php

namespace YdcTableCreator\interfaces;

use YdcTableCreator\TableData;

interface CreateTable
{
    public function draw(TableData $tableData);
}