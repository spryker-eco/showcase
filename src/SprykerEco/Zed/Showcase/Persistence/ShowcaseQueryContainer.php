<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Persistence;

use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method ShowcasePersistenceFactory getFactory()
 */
class ShowcaseQueryContainer extends AbstractQueryContainer implements ShowcaseQueryContainerInterface
{

    /**
     * @param int $idDummy
     *
     * @return \Orm\Zed\Showcase\Persistence\SpyShowcaseDummyQuery
     */
    public function queryDummyItem($idDummy)
    {
        return $this->getFactory()
            ->createSpyShowcaseDummyQuery()
            ->filterByIdDummy($idDummy);
    }
}
