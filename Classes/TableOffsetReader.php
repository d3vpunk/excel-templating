<?php

namespace Devpunk\ExcelTemplating\Classes;


class TableOffsetReader implements TableOffsetReaderInterface
{

    const DELIMITER = ":";
    const ARRAY_SYMBOL = "#";

    public function read(TableInterface $table)
    {
        $cells = $table->findCellsByRegex($templateCellsRegex);
        $pathedCells = $this->sortSiblings($cells, $cells);


    }

    /**
     * @param CellInterface[] $cells
     * @return CellInterface[][]
     */
    private function sortSiblings(array $cells)
    {
        $pathedCells = [];

        foreach ($cells as $cell) {
            $value = $cell->getValue();
            $parts = explode(self::DELIMITER, $value);
            foreach ($parts as $part) {
                if (!isset($pathedCells[$part])) {
                    $pathedCells[$part] = [];
                }
                $pathedCells &= $pathedCells[$part];
            }
            $pathedCells[] = $cell;
        }

        return $pathedCells;
    }

    /**
     * @param array $left
     * @param array $right
     * @param CoordinateInterface[] $offsets
     */
    private function calculateOffsets($left, $right, array $offsets)
    {
        if ($left instanceof CellInterface) {
            // match
        }

        /** @var CellInterface $currentLeftFromRightSide */
        $currentLeftFromRightSide = $this->getOuterCell($right, 0);
        $currentLeftFromLeftSide = $this->getOuterCell($left, 0);

        $coordinateLeftFromRightSide = $currentLeftFromRightSide->getCoordinate();
        $coordinateLeftFromLeftSide = $currentLeftFromLeftSide->getCoordinate();

        $offsetCoordinate = $coordinateLeftFromRightSide->diff($coordinateLeftFromLeftSide);

        array_push($offsets, $offsetCoordinate);
        if (isset($left[0]) && isset($left[1])) {
            $this->calculateOffsets($left[0], $left[1], $offsets);

            return;
        }

        //calculate assoc too
        $this->calculateOffsets(reset($left), reset($right), $offsets);

    }

    private function getOuterCell(array $cells, $index = 0)
    {
        /** @var CellInterface|array $currentOuterCell */
        $currentOuterCell = $cells;
        while (is_array($currentOuterCell)) {
            if (isset($currentOuterCell[$index])) {
                $currentOuterCell = $currentOuterCell[$index];
                continue;
            }
            $currentOuterCell = reset($currentOuterCell);
        }

        return $currentOuterCell;

    }
}