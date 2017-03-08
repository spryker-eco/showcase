<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Persistence;

use Orm\Zed\Showcase\Persistence\Base\SpyShowcaseDummyQuery;

interface ShowcaseQueryContainerInterface
{

    /**
     * @param int $idDummy
     *
     * @return SpyShowcaseDummyQuery
     */
    public function queryDummyItem($idDummy);
}
