<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\Showcase;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Spryker\Service\Kernel\AbstractService;

/**
 * @method \SprykerEco\Service\Showcase\ShowcaseServiceFactory getFactory()
 */
class ShowcaseService extends AbstractService implements ShowcaseServiceInterface
{

    /**
     * @param ShowcaseDummyTransfer $showCaseDummyTransfer
     *
     * @return array
     */
    public function encodeDummyItem(ShowcaseDummyTransfer $showCaseDummyTransfer)
    {
        return $this->getFactory()->createDummyEncoder()->encodeDummyItem($showCaseDummyTransfer);
    }
}
