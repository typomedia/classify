<?php

namespace Strikebit\Util;

interface ClassFactoryInterface
{
    /**
     * @param string $className
     * @param object $obj
     * @param array $objects
     *
     * @return array
     */
    public function create(string $className, $obj, array $objects = []): array;
}
