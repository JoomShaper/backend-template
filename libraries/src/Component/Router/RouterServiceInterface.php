<?php
/**
 * Joomla! Content Management System
 *
 * @copyright  Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Component\Router;

\defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Application\CMSApplicationInterface;
use Joomla\CMS\Menu\AbstractMenu;

/**
 * The component router service.
 *
 * @since  4.0.0
 */
interface RouterServiceInterface
{
	/**
	 * Returns the router.
	 *
	 * @param   CMSApplicationInterface  $application  The application object
	 * @param   AbstractMenu             $menu         The menu object to work with
	 *
	 * @return  RouterInterface
	 *
	 * @since  4.0.0
	 */
	public function createRouter(CMSApplicationInterface $application, AbstractMenu $menu): RouterInterface;
}
