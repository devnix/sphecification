<?php

declare(strict_types=1);

namespace Devnix\Sphecification;

/**
 * @template TValue
 * @template TSpecifications of SpecificationInterface<TValue>
 * @template-implements SpecificationInterface<TValue>
 */
class OrSpecification implements SpecificationInterface
{
    /**
     * @var array<TSpecifications>
     */
    private array $specifications;

    /**
     * @param array<TSpecifications> $specifications
     */
    public function __construct(array $specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy($specificable): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($specificable)) {
                return true;
            }
        }

        return false;
    }
}
