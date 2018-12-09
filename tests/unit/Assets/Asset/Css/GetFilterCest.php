<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\NoopNoopUnit\Assets\Asset\Css\Css;

use Phalcon\Assets\Asset\Css;
use Phalcon\Test\Fixtures\Traits\AssetsTrait;
use UnitTester;

/**
 * Class GetFilterCest
 *
 * @package Phalcon\Test\NoopNoopUnit\Assets\Asset\Css\Css
 */
class GetFilterCest
{
    use AssetsTrait;

    /**
     * Tests Phalcon\Assets\Asset :: getFilter() - css local
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetCssGetFilterCssFilter(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - getFilter() - css local');
        $asset = new Css('css/docs.css');

        $expected = true;
        $this->assetGetFilter($I, $asset, $expected);
    }

    /**
     * Tests Phalcon\Assets\Asset :: getFilter() - css remote
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsAssetCssGetFilterRemote(UnitTester $I)
    {
        $I->wantToTest('Assets\Asset - getFilter() - css remote');
        $asset = new Css('https://phalcon.ld/css/docs.css');

        $expected = true;
        $this->assetGetFilter($I, $asset, $expected);
    }
}
