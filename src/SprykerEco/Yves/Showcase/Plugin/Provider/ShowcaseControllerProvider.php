<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\Showcase\Plugin\Provider;

use Pyz\Yves\Application\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;

class ShowcaseControllerProvider extends AbstractYvesControllerProvider
{

    const ROUTE_SHOWCASE_DUMMY = 'showcase';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $allowedLocalesPattern = $this->getAllowedLocalesPattern();

        $this->createGetController('/{showcase}', static::ROUTE_SHOWCASE_DUMMY, 'Showcase', 'index')
            ->assert('showcase', $allowedLocalesPattern . 'showcase|showcase')
            ->value('showcase', 'showcase');
    }
}
