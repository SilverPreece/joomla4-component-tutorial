<?php

use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2020 John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

 // No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<h2><?= Text::_('COM_HELLOWORLD_MSG_HELLO_WORLD') ?></h2>

<p><?= $this->getModel()->getItem()->message; ?></p>