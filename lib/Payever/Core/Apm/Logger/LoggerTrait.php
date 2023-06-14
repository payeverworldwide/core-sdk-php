<?php

namespace Payever\Sdk\Core\Apm\Logger;

use Psr\Log\LoggerInterface;

if (version_compare(PHP_VERSION, '8.0.0') >= 0) {
    trait LoggerTrait
    {
        /** @var LoggerInterface  */
        protected $logger;

        /**
         * @param string $message
         * @param int $logLevel
         * @return self
         */
        abstract protected function sendMessage($message, $logLevel);

        /**
         * @param $level
         * @param \Stringable|string $message
         * @param array $context
         * @return void
         */
        public function log($level, string|\Stringable $message, array $context = []): void
        {
            $this->sendMessage($message, $level);
            $this->logger->log($level, $message, $context);
        }
    }
} else {
    trait LoggerTrait
    {
        /** @var LoggerInterface  */
        protected $logger;

        /**
         * @param string $message
         * @param int $logLevel
         * @return self
         */
        abstract protected function sendMessage($message, $logLevel);

        /**
         * @param $level
         * @param $message
         * @param array $context
         * @return void
         */
        public function log($level, $message, array $context = array())
        {
            $this->sendMessage($message, $level);
            $this->logger->log($level, $message, $context);
        }
    }
}