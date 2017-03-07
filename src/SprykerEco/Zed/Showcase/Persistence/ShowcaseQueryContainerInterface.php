<?php
/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Showcase\Persistence;

interface ShowcaseQueryContainerInterface
{

    /**
     * @param $id
     *
     * @return mixed
     */
    public function queryDummyItem($id);
}
