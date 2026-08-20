<?php

/**
 * @category  Base
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Base;

/**
 * @SuppressWarnings(PHPMD.MissingImport)
 */
abstract class EnumerableConstants
{
    /**
     * @return array
     *
     * @throws \ReflectionException
     */
    public static function enum()
    {
        $ref = new \ReflectionClass(new static());

        return $ref->getConstants();
    }

    /**
     * @param mixed $value
     * @return mixed
     *
     * @throws \ReflectionException
     */
    public static function constantNameByValue($value)
    {
        foreach (self::enum() as $name => $val) {
            if ($val === $value) {
                return $name;
            }
        }

        return null;
    }

    /**
     * @param string $name
     *
     * @return mixed|null
     *
     * @throws \ReflectionException
     */
    public static function valueOf($name)
    {
        $enums = self::enum();

        return array_key_exists($name, $enums) ? $enums[$name] : null;
    }
}
