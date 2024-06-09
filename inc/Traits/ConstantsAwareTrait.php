<?php

namespace LaunchpadFrameworkConstants\Traits;

use LaunchpadConstants\ConstantsInterface;

trait ConstantsAwareTrait
{
    /**
     * @var ConstantsInterface
     */
    protected $constants;

    /**
     * @param ConstantsInterface $constants
     */
    public function set_constants( ConstantsInterface $constants)
    {
        $this->constants = $constants;
    }
}