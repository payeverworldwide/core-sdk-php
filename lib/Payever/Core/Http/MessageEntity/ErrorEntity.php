<?php

/**
 * @category  MessageEntity
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Http\MessageEntity;

/**
 * This class represents Error Entity
 */
class ErrorEntity extends DynamicEntity
{
    /**
     * @param array|string|null $data
     */
    public function __construct($data = null)
    {
        if (!is_array($data)) {
            $data = ['message' => $data];
        }

        parent::__construct($data);
    }
}
