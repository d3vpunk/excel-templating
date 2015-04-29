<?php

namespace Devpunk\ExcelTemplating\Classes;

interface CellInterface
{
    /**
     * @param $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return CoordinateInterface
     */
    public function getCoordinate();

    /**
     * @return TableInterface
     */
    public function getTable();
} 