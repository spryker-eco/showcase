<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\Showcase;

use Spryker\Service\Kernel\AbstractServiceFactory;
use SprykerEco\Service\Showcase\Model\DummyEncoder;

class ShowcaseServiceFactory extends AbstractServiceFactory
{

    /**
     * @return DummyEncoder
     */
    public function createDummyEncoder()
    {
        return new DummyEncoder();
    }
}
