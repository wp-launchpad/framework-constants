<?php

namespace LaunchpadFrameworkConstants\Interfaces;

use LaunchpadConstants\ConstantsInterface;

interface ConstantsAwareInterface
{
    public function set_constants(ConstantsInterface $constants);
}