<?php

namespace spec\Devpunk\ExcelTemplating\Classes;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExcelTemplatingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Devpunk\ExcelTemplating\Classes\ExcelTemplating');
        $this->shouldHaveType('Devpunk\ExcelTemplating\Classes\ExcelTemplatingInterface');
    }

    function it_is_cool()
    {

        $this->shouldHaveType('Devpunk\ExcelTemplating\Classes\ExcelTemplating');
    }

}
