<?php

namespace FreeElephants\BitMask;

/**
 * @author samizdam
 */
trait BitMaskTrait
{

    /**
     * @param int $options
     * @param int $flag
     *
     * @return bool
     */
    protected function isFlagSet($options, $flag)
    {
        $options = abs( (int) $options);
        $flag = abs( (int) $flag);
        return (($options & $flag) === $flag);
    }

    /**
     *
     *
     * @param int $flag
     * @return bool
     */
    public function hasFlag($flag)
    {
        return $this->isFlagSet($this->getBitFieldValue(), $flag);
    }

    /**
     *
     *
     * @return int
     */
    abstract protected function getBitFieldValue();
}