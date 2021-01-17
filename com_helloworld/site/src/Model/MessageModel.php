<?php

namespace JohnSmith\Component\HelloWorld\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2020 John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * Hello World Message Model
 * @since 0.0.5
 */
class MessageModel extends ItemModel {

    /**
     * Returns a message for display
     * @param integer $pk Primary key of the "message item", currently unused
     * @return object Message object
     */
    public function getItem($pk= null): object {
        // This gives us a Joomla\Input\Input object
        $input = Factory::getApplication()->getInput();
        $greetingType = $input->getInt('greetingType', 1);

        $item = new \stdClass();
        
        switch($greetingType) {
            case 2:
                $item->message = Text::_('COM_HELLOWORLD_MSG_GREETING_GOODBYE');
                break;
            case 1:
            default:
                $item->message = Text::_('COM_HELLOWORLD_MSG_GREETING_HELLO');
                break;
        }
        
        return $item;
    }
        
}
