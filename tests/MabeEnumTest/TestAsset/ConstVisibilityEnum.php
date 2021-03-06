<?php

namespace MabeEnumTest\TestAsset;

use MabeEnum\Enum;

/**
 * Unit tests for the class MabeEnum\Enum
 *
 * @link http://github.com/marc-mabe/php-enum for the canonical source repository
 * @copyright Copyright (c) 2013 Marc Bennewitz
 * @license http://github.com/marc-mabe/php-enum/blob/master/LICENSE.txt New BSD License
 */
class ConstVisibilityEnum extends Enum
{
    const IPUB = 'indirect public';
    public const PUB = 'public';
    protected const PRO = 'protected';
    private const PRI = 'private';
}
