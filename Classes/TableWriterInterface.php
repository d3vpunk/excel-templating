<?php

namespace Devpunk\ExcelTemplating\Classes;

interface TableWriterInterface
{
    public function write(TableInterface $table, array $data);



}