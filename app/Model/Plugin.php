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
	public $displayField = 'package';


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Project'
	);

/**
 * Parse an uploaded composer.json file and match up the required plugins
 * with ones found in the models data. If the plugin doesn't exist in the
 * database, this method will try and discover data from Packagist about the
 * package.
 * 
 * @param string $filePath The path to the uploaded composer file
 */
	public function parseComposer($filePath) {
		App::uses('HttpSocket', 'Network/Http');
		$return = array();
		
		$composer = json_decode(file_get_contents($filePath));
		foreach ($composer->require as $package => $version) {
			list($vendor, $package) = explode('/', $package);
			
			$plugin = $this->find('first', array(
				'contain' => false,
				'conditions' => array(
					'vendor' => $vendor,
					'package' => $package
				)
			));

			if ($plugin) {
				$return[] = $plugin['Plugin']['id'];
			} else {
				$Http = new HttpSocket();
				$response = $Http->get("https://packagist.org/packages/$vendor/$package.json");
				$response = json_decode($response);

				if ($response->status !== 'error') {
					$packageData = json_decode($response->body);
					$packageData = $packageData->package->versions->{$version};

					$plugin['Plugin'] = array(
						'vendor' => $vendor,
						'package' => $package,
						'repo' => $packageData->source->url,
						'packagist' => 'http://packagist.org/' . $vendor . '/' . $package
					);
					$this->save($plugin);
					$return[] = $this->getLastInsertID();
					$packageData = json_decode($response->body);
					$packageData = $packageData->package->versions->{$version};

					$plugin['Plugin'] = array(
						'vendor' => $vendor,
						'package' => $package,
						'repo' => $packageData->source->url,
						'packagist' => 'http://packagist.org/' . $vendor . '/' . $package
					);
					$this->save($plugin);
					$return[] = $this->getLastInsertID();
				} else {
					CakeSession::write('Packagist.failed', "Unable to lookup some package details on Packagist");
				}
			}
		}

		return $return;
	}
}
