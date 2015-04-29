<?php

namespace Devpunk\ExcelTemplating\Classes;

interface CellTraverserInterface
{
    public function getNextCell($cell, CellOffsetInterface $cellOffset);
    public function getPreviousCell($cell, CellOffsetInterface $cellOffset);
}