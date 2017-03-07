<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Business;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;

interface ShowcaseFacadeInterface
{

    /**
     * @param ShowcaseDummyTransfer $showCaseDummyTransfer
     *
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItem(ShowcaseDummyTransfer $showCaseDummyTransfer);
}
