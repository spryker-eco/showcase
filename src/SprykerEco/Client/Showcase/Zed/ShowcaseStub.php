<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Client\Showcase\Zed;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class ShowcaseStub extends ZedRequestStub implements ShowcaseStubInterface
{

    /**
     * @param ShowcaseDummyTransfer $showCaseDummyTransfer
     *
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItem(ShowcaseDummyTransfer $showCaseDummyTransfer)
    {
        return $this->zedStub->call('/showcase/gateway/save-dummy-item', $showCaseDummyTransfer);
    }
}
