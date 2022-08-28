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

    /**
     *
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $this->setBitFieldValue($value);
    }

    /**
     *
     *
     * @param BitField $other
     * @return boolean
     */
    public function equals(BitField $other)
    {
        return $this->getBitFieldValue() === $other->getBitFieldValue();
    }

}
