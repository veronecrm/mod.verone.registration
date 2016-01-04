<?php
/**
 * Verone CRM | http://www.veronecrm.com
 *
 * @copyright  Copyright (C) 2015 - 2016 Adam Banaszkiewicz
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
        $settings = $this->openSettings('app');

        if($this->get('registration')->check($request->get('key')) == false)
        {
            $settings->set('id', '');
            $settings->set('registration.status', 0);
            $settings->set('registration.lastcheck', time());

            $this->flash('danger', $this->t('registrationKeyInvalid'));
            return $this->redirect('Registration', 'Registration', 'index');
        }

        $settings->set('id', $request->get('key'));
        $settings->set('registration.status', 1);
        $settings->set('registration.lastcheck', time());

        $this->flash('success', $this->t('registrationKeySaved'));
        return $this->redirect('Home', 'Home', 'index');
    }
}
