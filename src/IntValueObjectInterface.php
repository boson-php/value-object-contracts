<?php

declare(strict_types=1);

namespace Boson\Contracts\ValueObject;

/**
 * Represents integer value object types.
 *
 * @template-covariant T of int = int
 */
interface IntValueObjectInterface extends ValueObjectInterface
{
    /**
     * Returns inner integer value of the value object type.
     *
     * @return T
     */
    public function toInteger(): int;
}
