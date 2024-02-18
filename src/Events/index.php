<?php

require_once '../../vendor/autoload.php';

use Rleal\Playground\Events\{Event, Listener};

$myFunction =  fn () => dump('Event function...');

Event::bind('event.function', $myFunction);
Event::bind('event.callback', fn () => dump('Event callback'));
Event::bind('event.listener', Listener::class);

Event::dispatch('event.function');
Event::dispatch('event.callback');
Event::dispatch('event.listener');
