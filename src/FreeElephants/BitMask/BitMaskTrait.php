<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;

/**
 * @author samizdam
 */
trait BitMaskTrait
{
    protected function isFlagSet(int $options, int $flag): bool
    {
        return (($options & $flag) === $flag);
    }

    public function hasFlag(int $flag): bool
    {
        return $this->isFlagSet($this->getBitFieldValue(), $flag);
    }

    abstract protected function getBitFieldValue(): int;
}
