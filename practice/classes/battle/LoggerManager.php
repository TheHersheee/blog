<?php

class LoggerManager {
    const TRACE = 0;
    const DEBUG = 1;
    const INFO  = 2;
    const WARN  = 3;
    const ERROR = 4;
    const FATAL = 5;

    private $logLevel;

    public function __construct(int $logLevel)
    {
        $this->logLevel = $logLevel;

        if ($this->logLevel < self::TRACE || $this->logLevel > self::FATAL) {
            throw new InvalidArgumentException('Invalid log level');
        }
    }
    public function addLogger()
    {
        
    }
    public function trace(string $message)
    {
        $this->write($message, '[TRACE]', self::TRACE);
    }

    public function debug(string $message)
    {
        $this->write($message, '[DEBUG]', self::DEBUG);
    }

    public function info(string $message)
    {
        $this->write($message, '[INFO]', self::INFO);
    }

    public function warn(string $message)
    {
        $this->write($message, '[WARN]', self::WARN);
    }

    public function error(string $message)
    {
        $this->write($message, '[ERROR]', self::ERROR);
    }

    public function fatal(string $message)
    {
        $this->write($message, '[FATAL]', self::FATAL);
    }
}