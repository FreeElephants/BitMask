<?php

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
interface BitMaskInterface
{

    /**
     *
     *
     * @param int $flag
     * @return bool
     */
    public function hasFlag($flag);

    /**
     *
     *
     * @param int $flag
     * @return void
     */
    public function setFlag($flag);
}