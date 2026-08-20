<?php

/**
 * @category  Authorization
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Authorization;

/**
 * Apm token service
 */
class ApmSecretService
{
    /**
     * @return string
     */
    public function get()
    {
        return null;
    }

    /**
     * @param string $apmSecret
     * @return self
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function save($apmSecret)
    {
        return $this;
    }
}
