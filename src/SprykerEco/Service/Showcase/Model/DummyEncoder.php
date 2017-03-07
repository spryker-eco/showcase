<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */
namespace SprykerEco\Service\Showcase\Model;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;

class DummyEncoder
{

    /**
     * @param ShowcaseDummyTransfer $showcaseDummyTransfer
     *
     * @return array
     */
    public function encodeDummyItem(ShowcaseDummyTransfer $showcaseDummyTransfer)
    {
        return $showcaseDummyTransfer->toArray();
    }
}
