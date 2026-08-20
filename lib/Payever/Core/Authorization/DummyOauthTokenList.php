<?php

/**ы
 * @category  Authorization
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Authorization;

/**
 * Default storage of Oauth tokens if none explicitly provided.
 * Tokens are retrieved & stored in memory for each request.
 *
 * NOTE: It is strongly recommended to implement your own persistent tokens storage.
 */
class DummyOauthTokenList extends OauthTokenList
{
    /**
     * @inheritdoc
     */
    public function load()
    {
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function save()
    {
        return $this;
    }
}
