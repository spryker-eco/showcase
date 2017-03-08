<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Business\Model;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Orm\Zed\Showcase\Persistence\SpyShowcaseDummy;

class DummyModel
{

    /**
     * @param ShowcaseDummyTransfer $showcaseDummyTransfer
     *
     * @return ShowcaseDummyTransfer
     */
    public function saveDummyItem(ShowcaseDummyTransfer $showcaseDummyTransfer)
    {
        $showcaseEntity = new SpyShowcaseDummy();
        $showcaseEntity->setName($showcaseDummyTransfer->getShowcaseName());
        $showcaseEntity->save();

        $showcaseDummyTransfer->setIdShowcaseDummy($showcaseEntity->getIdDummy());

        return $showcaseDummyTransfer;
    }
}
