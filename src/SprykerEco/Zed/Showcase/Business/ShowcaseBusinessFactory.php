<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerEco\Zed\Showcase\Business\Model\DummyModel;

class ShowcaseBusinessFactory extends AbstractBusinessFactory
{

    /**
     * @return DummyModel
     */
    public function createDummyModel()
    {
        return new DummyModel();
    }
}
