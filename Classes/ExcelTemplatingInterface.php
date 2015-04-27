<?php

namespace Devpunk\ExcelTemplating\Classes;

interface ExcelTemplatingInterface
{
    public function render(\SplFileInfo $file, array $data);
} 