<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Communication\Controller;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \SprykerEco\Zed\Showcase\Business\ShowcaseFacade getFacade()
 */
class GatewayController extends AbstractGatewayController
{

    /**
     * @param ShowcaseDummyTransfer $showcaseDummyTransfer
     *
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItemAction(ShowcaseDummyTransfer $showcaseDummyTransfer)
    {
        return $this->getFacade()->saveDummyItem($showcaseDummyTransfer);
    }

}
