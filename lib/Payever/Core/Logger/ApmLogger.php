<?php

namespace Payever\Sdk\Core\Logger;

use Payever\Sdk\Core\Apm\ApmApiClient;
use Payever\Sdk\Core\ClientConfiguration;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class ApmLogger
 */
class ApmLogger implements LoggerInterface
{
    /** @var LoggerInterface  */
    protected $logger;

    /** @var ApmApiClient  */
    protected $apmApiClient;

    public function __construct(LoggerInterface $logger, ClientConfiguration $clientConfiguration)
    {
        $this->logger = $logger;
        $this->apmApiClient = new ApmApiClient($clientConfiguration);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function emergency($message, array $context = array())
    {
        return $this->logger->emergency($message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function alert($message, array $context = array())
    {
        return $this->logger->alert($message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function warning($message, array $context = array())
    {
        return $this->logger->warning($message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function debug($message, array $context = array())
    {
        return $this->logger->debug($message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function error($message, array $context = array())
    {
        $this->sendMessage($message, LogLevel::ERROR);

        return $this->logger->error($message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function critical($message, array $context = array())
    {
        $this->sendMessage($message, LogLevel::CRITICAL);

        return $this->logger->critical($message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function notice($message, array $context = array())
    {
        return $this->logger->notice($message, $context);
    }

    /**
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function log($level, $message, array $context = array())
    {
        $this->sendMessage($message, $level);

        return $this->logger->log($level, $message, $context);
    }

    /**
     * @param string $message
     * @param array $context
     * @return void|null
     */
    public function info($message, array $context = array())
    {
        return $this->logger->info($message, $context);
    }

    /**
     * @param $message
     * @param $logLevel
     * @return $this
     */
    protected function sendMessage($message, $logLevel)
    {
        if ($logLevel != LogLevel::CRITICAL && $logLevel != LogLevel::ERROR) {
            return $this;
        }

        try {
            $this->apmApiClient->sendLog($message, $logLevel);
        } catch (\Exception $e) {
            $this->logger->log(LogLevel::INFO, $e->getMessage());
        }

        return $this;
    }
}
