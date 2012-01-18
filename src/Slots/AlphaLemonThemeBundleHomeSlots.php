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

namespace Themes\AlphaLemonThemeBundle\src\Slots;

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
        $navMenu2 = '<ul>
                        <li><a href="http://alphalemon.com">AlphaLemon</a></li>
                        <li><a href="http://symfony.com/doc/current/book/index.html">Symfony2 Documentation</a></li>
                        <li><a href="http://symfony.com/doc/current/cookbook/index.html">Symfony2 Cookbook</a></li>
                        <li><a href="http://www.propelorm.org">Propel Orm</a></li>
                      </ul>';
        return array('logo' => new AlSlot('logo', array('repeated' => 'site', 'defaultText' => 'The company logo')),
                     'search_box' => new AlSlot('search_box', array('repeated' => 'language', 'defaultText' => 'Search <input type="text" value="" size="10" /> <input type="submit" />')),
                     'nav_menu' => new AlSlot('nav_menu', array('repeated' => 'language', 'defaultText' => '<ul><li><a href="#">Home page</a></li><li><a href="#">About</a></li><li><a href="#">Contacts</a></li></ul>')),
                     'slogan_box' => new AlSlot('slogan_box', array('repeated' => 'language', 'defaultText' => '<p>This is the base template used by AlphaLemon ThemeBundle.<br /><br />Feel free to customize it for your needs</p>')),
                     'nav_menu_1' => new AlSlot('nav_menu_1', array('repeated' => 'language', 'defaultText' => '<ul><li><a href="#">Home page</a></li><li><a href="#">About</a></li><li><a href="#">Contacts</a></li></ul>')),
                     'nav_menu_2' => new AlSlot('nav_menu_2', array('repeated' => 'language', 'defaultText' => $navMenu2)),
                     'social_box' => new AlSlot('social_box', array('repeated' => 'language', 'defaultText' => '<p>Follow us!</p>')),
                    );
    }
}
