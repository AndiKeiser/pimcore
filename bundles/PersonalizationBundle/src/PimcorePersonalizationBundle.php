<?php
declare(strict_types=1);
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Bundle\PersonalizationBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class PimcorePersonalizationBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    public function getCssPaths (): array
    {
        return [
            '/bundles/pimcorepersonalization/css/icons.css'
        ];
    }

    public function getJsPaths (): array
    {
        return [
            '/bundles/pimcorepersonalization/js/startup.js',
            '/bundles/pimcorepersonalization/js/settings/condition/abstract.js',
            '/bundles/pimcorepersonalization/js/settings/conditions.js',
            '/bundles/pimcorepersonalization/js/settings/action/abstract.js',
            '/bundles/pimcorepersonalization/js/settings/actions.js',
            '/bundles/pimcorepersonalization/js/settings/rules/panel.js',
            '/bundles/pimcorepersonalization/js/settings/rules/item.js',
            '/bundles/pimcorepersonalization/js/settings/targetGroups/panel.js',
            '/bundles/pimcorepersonalization/js/settings/targetGroups/item.js',
            '/bundles/pimcorepersonalization/js/settings/targetingtoolbar.js',
        ];
    }

    /**
     * @return Installer
     */
    public function getInstaller (): Installer
    {
        return $this->container->get (Installer::class);
    }


    public function getPath (): string
    {
        return \dirname (__DIR__);
    }
}