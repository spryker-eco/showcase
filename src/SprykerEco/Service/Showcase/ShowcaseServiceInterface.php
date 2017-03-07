<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Service\Showcase;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;

interface ShowcaseServiceInterface
{

    /**
     * @param ShowcaseDummyTransfer $showCaseDummyTransfer
     *
     * @return array
     */
    public function encodeDummyItem(ShowcaseDummyTransfer $showCaseDummyTransfer);
}
