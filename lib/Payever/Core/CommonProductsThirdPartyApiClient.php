<?php

/**
 * @category  Core
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core;

/**
 * Common Products Third Party API Client
 */
class CommonProductsThirdPartyApiClient extends CommonApiClient
{
    const URL_SANDBOX = 'https://products-third-party.staging.devpayever.com/';
    const URL_LIVE    = 'https://products-third-party.payever.org/';
}
