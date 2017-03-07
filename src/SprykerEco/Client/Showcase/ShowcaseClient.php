<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\Showcase;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \SprykerEco\Client\Showcase\ShowcaseFactory getFactory()
 */
class ShowcaseClient extends AbstractClient implements ShowcaseClientInterface
{

    /**
     * @param ShowcaseDummyTransfer $showCaseDummyTransfer
     *
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItem(ShowcaseDummyTransfer $showCaseDummyTransfer)
    {
        return $this->getZedStub()->saveDummyItem($showCaseDummyTransfer);
    }

    /**
     * @return \SprykerEco\Client\Showcase\Zed\ShowcaseStubInterface
     */
    protected function getZedStub()
    {
        return $this->getFactory()->createZedStub();
    }
}
