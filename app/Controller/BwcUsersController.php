<?php
App::uses('UsersController', 'Users.Controller');

/**
 * Description of BwcUsersController
 *
 * @author David Yell <neon1024@gmail.com>
 */
class BwcUsersController extends UsersController {

	public $uses = array('BwcUser');

/**
 * Overload the Users plugin controller so that we can change it's settings
 * This is the advised way to achieve this
 * Ref: https://github.com/CakeDC/users/issues/130
 */
	public function beforeFilter() {
		parent::beforeFilter();

		if ($this->Auth->user('is_admin') === false) {
			$this->Auth->loginRedirect = array('controller' => 'bwc_users', 'action' => 'view', 'slug' => $this->Auth->user('slug'), 'admin' => false, 'plugin' => false);
		} else {
			$this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index', 'admin' => true, 'plugin' => false);
		}
	}

/**
 * Allow a user to view their own record
 *
 * @param string $slug
 */
	public function view($slug = null) {
		// Just a quick check to stop people trying other user slugs
		if ($slug !== $this->Auth->user('slug')) {
			throw new NotFoundException('User not found');
		}

		$user = $this->BwcUser->find('first', array(
			'contain' => array(
				'Project'
			),
			'conditions' => array(
				'id' => $this->Auth->user('id'),
				'active' => 1,
				'email_verified' => 1
			)
		));
		$this->set('user', $user);
	}

}
