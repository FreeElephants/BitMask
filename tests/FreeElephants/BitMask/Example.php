<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;


/**
 *
 * @author samizdam
 * @internal
 */
class Example
{

    use BitMaskTrait;

    protected function getBitFieldValue(): int
    {
        return 0b0010;
    }
}
