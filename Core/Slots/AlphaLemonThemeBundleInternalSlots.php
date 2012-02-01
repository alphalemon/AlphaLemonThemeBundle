<?php
/*
 * This file is part of the AlphaLemonThemeBundle Theme and it is distributed
 * under the MIT License. In addiction, to use this bundle, you must leave
 * intact this copyright notice.
 *
 * (c) Since 2011 AlphaLemon
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
 * This class has been created just only with testing pourpose
 */
class AlphaLemonThemeBundleInternalSlots extends AlTemplateSlots
{
    public function configure()
    {
        return array('ads_box' => new AlSlot('ads_box', array('repeated' => 'language')),
                     'slogan_box' => new AlSlot('slogan_box', array('repeated' => 'language')),
                     'download_box' => new AlSlot('download_box', array('repeated' => 'language')),
                     'social_box' => new AlSlot('social_box', array('repeated' => 'language')),
                     'box_title_1' => new AlSlot('box_title_1', array('repeated' => 'language')),
                     'box_title_2' => new AlSlot('box_title_2', array('repeated' => 'language')),
                     'tweets_box' => new AlSlot('tweets_box'),            
                     'screenshots_box' => new AlSlot('screenshots_box', array('repeated' => 'language')),
                    );
    }
}
/**/
