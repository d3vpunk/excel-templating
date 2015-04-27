<?php

namespace Devpunk\ExcelTemplating\Classes;

interface CellMapperInterface
{
    public function setValue($value, $index = null);
} 