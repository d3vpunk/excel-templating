<?php

namespace Devpunk\ExcelTemplating\Classes;

interface CoordinateInterface
{
    public function getX();

    public function getY();

    /**
     * @param $baseCellCoordinate
     * @return CoordinateInterface
     */
    public function diff($baseCellCoordinate);
} 