<?php
App::uses('AppController', 'Controller');
/**
 * Description of ProjectsController
 *
 * @author David Yell <neon1024@gmail.com>
 */
class ProjectsController extends AppController {

/**
 * Render the homepage.
 *
 * @return CakeResponse
 */
	public function home() {
		$latestProjects = $this->Project->find('all', array(
			'contain' => false,
			'conditions' => array(
				'approved' => true
			),
			'order' => array('Project.modified' => 'DESC'),
			'limit' => 3
		));
		$this->set('latestProjects', $latestProjects);

		$this->Crud->on('beforePaginate', function ($e) {
			$e->subject->paginator->settings['conditions'] = array('approved' => true);
		});

		return $this->Crud->execute();
	}

/**
 * Index action to catch event to overload pagination limit
 *
 * @return CakeResponse
 */
	public function index() {
		$this->Crud->on('beforePaginate', function ($e) {
			$e->subject->paginator->settings = array_merge($e->subject->paginator->settings, array('limit' => 5));
		});
		
		return $this->Crud->execute();
	}

/**
 * Allow a regular use to submit a new project
 *
 * @return CakeResponse
 */
	public function add() {
		$plugins = $this->Project->Plugin->find('list', array(
			'fields' => array('Plugin.id', 'Plugin.package', 'Plugin.vendor')
		));
		$this->set('plugins', $plugins);

		$this->Crud->on('beforeSave', function ($e) {
			if (!empty($e->subject->request->data['Project']['composer_file']['tmp_name'])) {
				$e->subject->controller->request->data['Plugin']['Plugin'] = array_merge($e->subject->controller->request->data['Plugin']['Plugin'], $this->Project->Plugin->parseComposer($e->subject->request->data['Project']['composer_file']['tmp_name']));
			}
			$e->subject->controller->request->data['Project']['user_id'] = $this->Auth->user('id');
		});

		$this->Crud->on('beforeRedirect', function ($e) {
			if ($e->subject->success) {
				$e->subject->url = array('controller' => 'bwc_users', 'action' => 'view', 'slug' => $this->Auth->user('slug'));
			}
		});

		return $this->Crud->execute();
	}

/**
 * Allow a user to edit their own project, but only if it's not been approved.
 *
 * @return CakeResponse
 */
	public function edit() {
		$this->Crud->on('afterFind', function ($e) {
			if ($e->subject->item['Project']['user_id'] !== $this->Auth->user('id') || $e->subject->item['Project']['approved']) {
				throw new NotFoundException();
			}
		});

		$plugins = $this->Project->Plugin->find('list', array(
			'fields' => array('Plugin.id', 'Plugin.package', 'Plugin.vendor')
		));
		$this->set('plugins', $plugins);

		return $this->Crud->execute();
	}

/**
 * Project Edit method
 * Overloaded to allow use of find for users on the correct model
 *
 * @param int $id
 * @return CakeResponse
 */
	public function admin_edit($id) {
		$plugins = $this->Project->Plugin->find('list', array(
			'fields' => array('Plugin.id', 'Plugin.package', 'Plugin.vendor')
		));
		$this->set('plugins', $plugins);

		$this->set('users', $this->Project->BwcUser->find('list'));
		return $this->Crud->execute();
	}

}
