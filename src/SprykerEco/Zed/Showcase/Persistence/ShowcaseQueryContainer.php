<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Persistence;

use Generated\Shared\Transfer\ShowcaseDummyTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

class ShowcaseQueryContainer extends AbstractQueryContainer implements ShowcaseQueryContainerInterface
{

    /**
     * @param $id
     *
     * @return mixed
     */
    public function queryDummyItem($id)
    {
        return (new ShowcaseDummyTransfer())
            ->setIdShowcaseDummy(1)
            ->setShowcaseName('FromQueryContainer');
    }
}
