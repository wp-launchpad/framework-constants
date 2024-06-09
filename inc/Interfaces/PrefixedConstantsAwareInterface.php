<?php

namespace LaunchpadFrameworkConstants\Interfaces;

use LaunchpadConstants\PrefixedConstantsInterface;

interface PrefixedConstantsAwareInterface
{
    public function set_prefixed_constants(PrefixedConstantsInterface $prefixed_constants);
}