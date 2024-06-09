<?php

namespace LaunchpadFrameworkConstants\Facades;

use LaunchpadConstants\PrefixedConstants;
use LaunchpadCore\Container\PrefixAwareInterface;
use LaunchpadCore\Dispatcher\DispatcherAwareInterface;
use LaunchpadCore\Dispatcher\DispatcherAwareTrait;
use LaunchpadCore\Container\PrefixAware;
use LaunchpadDispatcher\Dispatcher;

class DispatcherAwarePrefixedConstants extends PrefixedConstants implements PrefixAwareInterface, DispatcherAwareInterface
{
    use DispatcherAwareTrait, PrefixAware;

    public function __construct(Dispatcher $dispatcher)
    {
        parent::__construct($dispatcher, '');
    }
}