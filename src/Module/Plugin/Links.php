<?php
/**
 * Verone CRM | http://www.veronecrm.com
 *
 * @copyright  Copyright (C) 2015 - 2016 Adam Banaszkiewicz
 * @license    GNU General Public License version 3; see license.txt
 */

namespace App\Module\Registration\Plugin;

use CRM\App\Module\Plugin;

class Links extends Plugin
{
    public function dashboard()
    {
        if($this->acl('mod.Registration.Registration', 'mod.Registration')->isAllowed('core.module'))
        {
            return [
                [
                    'ordering' => 200,
                    'icon' => 'fa fa-black-tie',
                    'icon-type' => 'class',
                    'name' => $this->t('registration'),
                    'href' => $this->createUrl('Registration', 'Registration')
                ]
            ];
        }
    }
}
