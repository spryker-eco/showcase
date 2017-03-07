<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Business\Model;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;

class DummyModel
{

    /**
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItem(ShowcaseDummyTransfer $showcaseDummyTransfer)
    {
        return $showcaseDummyTransfer
            ->setIdShowcaseDummy(1)
            ->setShowcaseName('FromFacade');
    }
}
