<?php
App::uses('AppModel', 'Model');
/**
 * Plugin Model
 *
 * @property Project $Project
 */
class Plugin extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Project'
	);

}
