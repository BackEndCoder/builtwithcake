<?php
App::uses('UsersController', 'Users.Controller');

/**
 * Description of BwcUsersController
 *
 * @author David Yell <dyell@ukwebmedia.com>
 */
class BwcUsersController extends UsersController {

/**
 * Overload the Users plugin controller so that we can change it's settings
 * This is the advised way to achieve this
 * Ref: https://github.com/CakeDC/users/issues/130
 */
	public function beforeFilter() {
		parent::beforeFilter();

		$this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index', 'admin' => true);
	}

}
