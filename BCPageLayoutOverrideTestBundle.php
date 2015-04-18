<?php
/**
 * File containing the BCPageLayoutOverrideTestBundle class.
 *
 * @copyright Copyright (C) Brookins Consulting. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 0.0.1
 */

namespace BrookinsConsulting\BCPageLayoutOverrideTestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BCPageLayoutOverrideTestBundle extends Bundle
{
    protected $name = "BCPageLayoutOverrideTestBundle";

    /**
     * Enable Bundle Inheritance (of the eZ Systems, eZ Publish 5, DemoBundle)
     *
     */
    public function getParent()
    {
        return 'eZDemoBundle';
    }
}