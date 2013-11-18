<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('CrudControllerTrait', 'Crud.Lib');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	use CrudControllerTrait;

/**
 * List of global controller components
 *
 * @var array
 */
	public $components = [
		'RequestHandler',
		'Session',
		'Crud.Crud' => [
			'listeners' => [
				'Crud.Api',
				'Crud.ApiPagination',
				'Crud.ApiQueryLog'
			],
			'actions' => [
				'home' => 'Crud.Index',
				'index' => 'Crud.Index',
				'add' => 'Crud.Add',
				'edit' => 'Crud.Edit',
				'view' => 'Crud.View',
				'admin_index' => 'Crud.Index',
				'admin_view' => 'Crud.View',
				'admin_edit' => 'Crud.Edit'
			]
		],
		'Paginator' => ['settings' => ['paramType' => 'querystring', 'limit' => 30]],
		'Users.RememberMe',
		'Auth'
	];

/**
 * beforeFilter method
 */
	public function beforeFilter() {
		if (isset($this->request->params['prefix']) && $this->request->params['prefix'] === 'admin') {
			$this->layout = 'admin';
		}

		$this->RememberMe->restoreLoginFromCookie();
		$this->Auth->authorize = array('Controller');
		$this->Auth->allow(array('home', 'index', 'edit', 'view'));
		$this->Auth->loginAction = array('controller' => 'bwc_users', 'action' => 'login', 'plugin' => false, 'admin' => false);
		$this->Auth->logoutRedirect = '/';
		$this->Auth->authError = __('Please login.');
	}

/**
 * Deal with authorizing users when they access controller actions
 *
 * @param array $user
 */
	public function isAuthorized($user = null) {
		if ($this->request->prefix === 'admin' && $this->Auth->user('is_admin') === true) {
			return true;
		}

		return false;
	}
}
