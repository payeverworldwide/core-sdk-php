<?php

/**
 * @category  ResponseEntity
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Http\ResponseEntity;

use Payever\Sdk\Core\Helper\StringHelper;
use Payever\Sdk\Core\Http\ResponseEntity;

/**
 * This class represents Dynamic ResponseInterface Entity
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class DynamicResponse extends ResponseEntity
{
    /**
     * {@inheritdoc}
     */
    public function load($data)
    {
        foreach ($data as $key => $value) {
            $property = StringHelper::camelize($key);
            $this->{$property} = $value;
        }

        return $this;
    }
}
