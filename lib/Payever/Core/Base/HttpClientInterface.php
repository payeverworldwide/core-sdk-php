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

use Payever\Sdk\Core\Http\Response;

interface HttpClientInterface
{
    /**
     * @param RequestInterface $request
     * @return Response
     */
    public function execute(RequestInterface $request);

    /**
     * @param RequestInterface $request
     * @return string
     */
    public function fetch(RequestInterface $request);

    /**
     * @param string $fileUrl
     * @param string  $savePath
     *
     * @return void
     */
    public function download($fileUrl, $savePath);
}
