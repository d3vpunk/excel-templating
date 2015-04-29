<?php

namespace Devpunk\ExcelTemplating\Classes;

interface TableInterface
{
    /**
     * @param $regex
     * @return CellInterface[]
     */
    public function findCellsByRegex($regex);

    /**
     * @param CoordinateInterface $coordinates
     * @return CellInterface
     */
    public function getCell(CoordinateInterface $coordinates);

    public function insertRowBefore(CoordinateInterface $coordinates);

    public function insertRowAfter(CoordinateInterface $coordinates);

    public function insertColumnBefore(CoordinateInterface $coordinates);

    public function insertColumnAfter(CoordinateInterface $coordinates);
}