<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
trait BitFieldTrait
{

    private int $bitFieldValue = 0;

    public function setBitFieldValue(int $value): void
    {
        $this->bitFieldValue = $value;
    }

    public function getBitFieldValue(): int
    {
        return $this->bitFieldValue;
    }

}
