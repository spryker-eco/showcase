<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\Showcase\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;

class IndexController extends AbstractController
{

    /**
     * @return array
     */
    public function indexAction()
    {
        return [
            'data' => 'dummyData'
        ];
    }
}
