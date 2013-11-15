<?php
App::uses('User', 'Users.Model');
/**
 * Description of BwcUser
 *
 * @author David Yell <neon1024@gmail.com>
 */
class BwcUser extends User{

	public $displayField = 'username';

	public $hasMany = array(
		'Project' => array(
			'foreignKey' => 'user_id'
		)
	);

}
