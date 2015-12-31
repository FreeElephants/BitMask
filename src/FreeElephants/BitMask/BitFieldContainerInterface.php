<?php

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
interface BitFieldContainerInterface
{

    /**
     *
     *
     * @param int $value
     * @return void
     */
    public function setBitFieldValue($value);

    /**
     *
     *
     * @return int
     */
    public function getBitFieldValue();

}