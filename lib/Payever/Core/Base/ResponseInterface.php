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

use Payever\Sdk\Core\Http\RequestEntity;
use Payever\Sdk\Core\Http\ResponseEntity;

/**
 * Interface describes functions of ResponseInterface
 */
interface ResponseInterface
{
    /**
     * Loads response object
     *
     * @param array|string|object $params
     *
     * @return self
     */
    public function load($params);

    /**
     * Sets RequestInterface Entity
     *
     * @param RequestEntity $requestEntity
     *
     * @return self
     */
    public function setRequestEntity(RequestEntity $requestEntity);

    /**
     * Sets ResponseInterface Entity
     *
     * @param ResponseEntity $responseEntity
     *
     * @return self
     */
    public function setResponseEntity(ResponseEntity $responseEntity);

    /**
     * Returns RequestInterface Entity used
     *
     * @return RequestEntity
     */
    public function getRequestEntity();

    /**
     * Returns ResponseInterface Entity used
     *
     * @return ResponseEntity
     */
    public function getResponseEntity();
}
