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

use Payever\Sdk\Core\Base\NamedList;
use Payever\Sdk\Core\Base\OauthTokenInterface;

/**
 * This class represents Payever OauthToken List
 */
abstract class OauthTokenList extends NamedList
{
    /**
     * Loads Tokens into List from external source
     *
     * @return self
     */
    abstract public function load();

    /**
     * Saves Tokens from List to external source
     *
     * @return self
     */
    abstract public function save();

    /**
     * Returns empty OauthToken instance
     *
     * @return OauthTokenInterface
     *
     * @throws \Exception
     */
    public function create()
    {
        return new OauthToken();
    }
}
