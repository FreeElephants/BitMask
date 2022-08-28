<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
interface BitFieldContainerInterface
{
    public function setBitFieldValue(int $value): void;

    public function getBitFieldValue(): int;

}
