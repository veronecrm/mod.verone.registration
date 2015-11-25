<?php
/**
 * Verone CRM | http://www.veronecrm.com
 *
 * @copyright  Copyright (C) 2015 Adam Banaszkiewicz
 * @license    GNU General Public License version 3; see license.txt
 */

namespace App\Module\Registration\Controller;

use CRM\App\Controller\BaseController;

/**
 * @section mod.Registration.Registration
 */
class Registration extends BaseController
{
    /**
     * @access core.module
     */
    public function indexAction()
    {
        return $this->render();
    }

    /**
     * @access core.module
     */
    public function saveAction($request)
    {
        $this->openSettings('app')->set('id', $request->get('key'));

        $this->flash('success', $this->t('registrationKeySaved'));

        return $this->redirect('Home', 'Home', 'index');
    }
}
