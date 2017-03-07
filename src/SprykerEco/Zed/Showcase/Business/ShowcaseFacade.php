<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Business;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method ShowcaseBusinessFactory getFactory()
 */
class ShowcaseFacade extends AbstractFacade implements ShowcaseFacadeInterface
{

    /**
     * @param ShowcaseDummyTransfer $showcaseDummyTransfer
     *
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItem(ShowcaseDummyTransfer $showcaseDummyTransfer)
    {
        $dummyModel = $this->getFactory()->createDummyModel();

        return $dummyModel->saveDummyItem($showcaseDummyTransfer);
    }
}
