<?php

namespace LaunchpadFrameworkConstants\Facades;

use LaunchpadConstants\Constants;
use LaunchpadCore\Dispatcher\DispatcherAwareInterface;
use LaunchpadCore\Dispatcher\DispatcherAwareTrait;

class DispatcherAwareConstants extends Constants implements DispatcherAwareInterface
{
    use DispatcherAwareTrait;

    public function __construct()
    {
        parent::__construct($this->dispatcher);
    }
}