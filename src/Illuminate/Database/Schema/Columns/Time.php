<?php

namespace Illuminate\Database\Schema\Columns;

/**
 * Class Time
 *
 * This class is used to store params of columns containing time and created by
 * Blueprint::time, Blueprint::timeTz, Blueprint::dateTime, Blueprint::dateTimeTz methods
 * @property-read int $precision
 */
class Time extends Column
{
    /**
     * @var int
     */
    protected $precision;

    /**
     * Time constructor.
     *
     * @param string $type
     * @param string $name
     * @param int $precision
     */
    public function __construct(string $type, string $name, int $precision)
    {
        parent::__construct($type, $name);

        $this->precision = $precision;
    }
}
