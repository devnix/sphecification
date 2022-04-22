<?php

declare(strict_types=1);

namespace Devnix\Sphecification;

/**
 * @template TValue
 * @template TSpecification of SpecificationInterface<TValue>
 * @template-implements SpecificationInterface<TValue>
 */
class NotSpecification implements SpecificationInterface
{
    /**
     * @var TSpecification
     */
    private SpecificationInterface $specification;

    /**
     * @param TSpecification $specification
     */
    public function __construct($specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy($specificable): bool
    {
        return !$this->specification->isSatisfiedBy($specificable);
    }
}
