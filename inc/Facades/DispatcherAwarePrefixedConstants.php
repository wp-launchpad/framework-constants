<?php

namespace LaunchpadFrameworkConstants\Facades;

use LaunchpadConstants\PrefixedConstants;
use LaunchpadCore\Container\PrefixAwareInterface;
use LaunchpadCore\Dispatcher\DispatcherAwareInterface;
use LaunchpadCore\Dispatcher\DispatcherAwareTrait;
use LaunchpadCore\Container\PrefixAware;
class DispatcherAwarePrefixedConstants extends PrefixedConstants implements PrefixAwareInterface, DispatcherAwareInterface
{
    use DispatcherAwareTrait, PrefixAware;

    public function __construct()
    {
        parent::__construct($this->dispatcher, $this->prefix);
    }
}