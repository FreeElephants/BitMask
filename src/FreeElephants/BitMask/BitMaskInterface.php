<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
interface BitMaskInterface
{
    public function hasFlag(int $flag): bool;

    public function setFlag(int $flag): void;
}
