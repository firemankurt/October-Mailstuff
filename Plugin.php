<?php namespace FireUnion\MailStuff;

use System\Classes\PluginBase;

/**
 * MailStuff Plugin Information File
 */
class Plugin extends PluginBase {
	/**
	 * Returns information about this plugin.
	 *
	 * @return array
	 */
	public function pluginDetails() {
		return [
			'name' => 'MailStuff',
			'description' => 'No description provided yet...',
			'author' => 'FireUnion',
			'icon' => 'icon-leaf',
		];
	}

	/**
	 * Registers any front-end components implemented in this plugin.
	 *
	 * @return array
	 */
	public function registerComponents() {

		return [
			'FireUnion\MailStuff\Components\SenditOld' => 'SenditOld',
			'FireUnion\MailStuff\Components\SenditNew' => 'SenditNew',
		];
	}
}
