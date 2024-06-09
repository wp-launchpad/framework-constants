<?php

namespace LaunchpadFrameworkConstants\Traits;

use LaunchpadConstants\PrefixedConstantsInterface;

trait PrefixedConstantsAwareTrait
{
    /**
     * @var PrefixedConstantsInterface
     */
    protected $prefixed_constants;

    /**
     * @param PrefixedConstantsInterface $prefixed_constants
     */
    public function set_prefixed_constants( PrefixedConstantsInterface $prefixed_constants)
    {
        $this->prefixed_constants = $prefixed_constants;
    }
}