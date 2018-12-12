<?php

namespace TheCodingMachine\GraphQL\Controllers;

use TheCodingMachine\GraphQL\Controllers\Annotations\Type;

interface NamingStrategyInterface
{
    /**
     * Returns the name of the GraphQL interface from a name of GraphQL concrete type (when the interface is created
     * automatically to manage inheritance)
     */
    public function getInterfaceNameFromConcreteName(string $concreteType): string;

    /**
     * Returns the GraphQL output object type name based on the type className and the Type annotation.
     */
    public function getOutputTypeName(string $typeClassName, Type $type): string;
}
