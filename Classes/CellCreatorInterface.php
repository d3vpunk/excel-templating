<?php

namespace Devpunk\ExcelTemplating\Classes;

interface  CellCreatorInterface
{
    public function create($cell, CellOffsetInterface $offset);
}