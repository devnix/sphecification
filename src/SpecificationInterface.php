<?php

declare(strict_types=1);

namespace Devnix\Sphecification;

/**
 * @template T
 *
 * Generic specification interface
 */
interface SpecificationInterface
{
    /**
     * @param T $specificable
     */
    public function isSatisfiedBy($specificable): bool;
}
