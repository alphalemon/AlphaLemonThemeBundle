<?php
/*
 * This file is part of the AlphaLemonThemeBundle Theme and it is distributed
 * under the MIT License. In addiction, to use this bundle, you must leave
 * intact this copyright notice.
 *
 * Copyright (c) AlphaLemon <webmaster@alphalemon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://alphalemon.com
 * 
 * @license    MIT License
 * 
 */

namespace Themes\AlphaLemonThemeBundle\Core\Slots;

use AlphaLemon\ThemeEngineBundle\Core\TemplateSlots\AlTemplateSlots;
use AlphaLemon\ThemeEngineBundle\Core\TemplateSlots\AlSlot;

/**
 * Defines the Home template
 *
 * @author AlphaLemon
 */
class AlphaLemonThemeBundleHomeSlots extends AlTemplateSlots
{
    public function configure() 
    {
        return $this->setupSlots('AlphaLemonThemeBundle', 'home');
    }
}
