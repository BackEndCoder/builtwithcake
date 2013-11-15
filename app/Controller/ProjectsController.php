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
 * Allow a regular use to submit a new project
 *
 * @return CakeResponse
 */
	public function add() {
		$this->Crud->on('beforeSave', function ($e) {
			$e->subject->controller->request->data['Project']['user_id'] = $this->Auth->user('id');
		});

		$this->Crud->on('beforeRedirect', function ($e) {
			if ($e->subject->success) {
				$e->subject->url = array('controller' => 'bwc_user', 'action' => 'view', 'slug' => $this->Auth->user('slug'));
			}
		});

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
		$this->set('users', $this->Project->BwcUser->find('list'));
		return $this->Crud->execute();
	}

}
