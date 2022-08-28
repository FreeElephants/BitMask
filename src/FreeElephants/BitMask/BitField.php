<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;

/**
 * Simple Value Object for Bit Field.
 *
 * @author samizdam
 *
 */
class BitField implements BitFieldContainerInterface
{
    use BitFieldTrait;

    public function __construct(int $value)
    {
        $this->setBitFieldValue($value);
    }

    public function equals(BitField $other): bool
    {
        return $this->getBitFieldValue() === $other->getBitFieldValue();
    }

}
