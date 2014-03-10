<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property User $User
 */
class Project extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Default model ordering
 *
 * @var string
 */
	public $order = 'Project.modified DESC';

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BwcUser' => array(
			'foreignKey' => 'user_id'
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Plugin'
	);

/**
 * Configure behaviours
 * @var array
 */
	public $actsAs = array(
		'Upload.Upload' => array(
			'screenshot' => array(
				'fields' => array(
					'dir' => 'screenshot_dir'
				),
				'thumbnailSizes' => array(
					'carousel' => '1140w',
					'display' => '800w',
					'medium' => '360w',
					'account' => '120w',
					'small' => '100w'
				)
			)
		)
	);

/**
 * Model validation
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'one' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a title',
			)
		),
		'url' => array(
			'one' => array(
				'rule' => array('url', true),
				'message' => 'Please enter a valid url',
				'allowEmpty' => true
			)
		)
	);
}
