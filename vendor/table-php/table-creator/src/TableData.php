<?php

namespace YdcTableCreator;

class TableData
{
    public $headers;
    public $data;

    public function __construct($headers, $data)
    {
        $this->headers = $headers;
        $this->data = $data;
    }
}