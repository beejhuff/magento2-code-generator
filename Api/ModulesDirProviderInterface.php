<?php

declare(strict_types=1);

/**
 * This file is part of Code Generator for Magento.
 * (c) 2017. Rostyslav Tymoshenko <krifollk@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Krifollk\CodeGenerator\Api;

/**
 * Interface ModulesDirProviderInterface
 *
 * @package Krifollk\CodeGenerator\Api
 */
interface ModulesDirProviderInterface
{
    public function getModulesDir(): string;
}
