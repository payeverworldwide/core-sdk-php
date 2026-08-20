<?php

/**
 * @category  API
 * @package   Payever\Core
 * @author    payever GmbH <service@payever.de>
 * @copyright 2017-2026 payever GmbH
 * @license   MIT <https://opensource.org/licenses/MIT>
 * @link      https://docs.payever.org/api
 */

namespace Payever\Sdk\Core\Enum;

use Payever\Sdk\Core\Base\EnumerableConstants;

/**
 * This class represents Payever API Channel Type Sets
 */
class ChannelTypeSet extends EnumerableConstants
{
    const ECOMMERCE = 'ecommerce';
    const CLICK_COLLECT = 'click_collect';
    const QR = 'qr';
    const EMAIL = 'email';
    const SMS = 'sms';
    const TERMINAL = 'terminal';
    const SELF_CHECKOUT = 'self_checkout';
    const EXTERNAL = 'external';
    const FINANCE_EXPRESS = 'finance_express';
    const SOCIAL = 'social';
    const MESSENGER = 'messenger';
}
