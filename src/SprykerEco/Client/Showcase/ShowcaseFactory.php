<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\Showcase;

use Spryker\Client\Kernel\AbstractFactory;
use SprykerEco\Client\Showcase\Zed\ShowcaseStub;

class ShowcaseFactory extends AbstractFactory
{

    /**
     * @return \SprykerEco\Client\Showcase\Zed\ShowcaseStubInterface
     */
    public function createZedStub()
    {
        return new ShowcaseStub($this->getProvidedDependency(ShowcaseDependencyProvider::SERVICE_ZED));
    }

}
