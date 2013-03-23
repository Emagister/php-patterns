<?php
namespace Patterns\Singleton;

class Singleton
{
    private static $instance = null;

    /**
     * You cannot invoke new on this object because constructor it's private
     */
    private function __construct()
    {
    }

    /**
     * Returns unique single instance
     *
     * @return \Singleton
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    /**
     * We must protect __clone magic method
     *
     * In order not to get another copy of this object
     *
     * @throws \Exception
     */
    public function __clone()
    {
        throw new \Exception('Error cloning a Singleton class');
    }
}
