<?php

namespace Rleal\Playground\Events;

use Closure;
use Exception;

class Event
{
    public static $events = [];

    public static function bind(string $event, Closure|string $listener): void
    {
        self::$events[$event][] = $listener;
    }

    public static function dispatch($event, $args = []): void
    {
        if (! isset(self::$events[$event])) {
            throw new Exception('Event not found!');
        }

        foreach (self::$events[$event] as $listener) {
            if (is_callable($listener)) {
                call_user_func($listener, $args);
                return;
            }

            (new $listener)->handle($args);
        }
    }
}
