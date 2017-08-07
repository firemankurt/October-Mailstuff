<?php namespace FireUnion\MailStuff\Components;

use Cms\Classes\ComponentBase;
use FireUnion\MailStuff\Mailables\OrderMailable;
use Mail;

class SenditNew extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Sendit New Component',
			'description' => 'Works in L5.5',
		];
	}

	public function defineProperties() {
		return [];
	}

	public function onRun() {
	}

	public function onSend() {
		// Create recipient info
		$recipient = [
			'name' => 'Joe User',
			'email' => 'joeuser@domain.com',
		];
		// Create array of data that may be needed in mail template
		$data = [
			'orderid' => '1234',
			'recip' => $recipient,
		];

		Mail::to($recipient['email'], $recipient['name'])->queue(
			new OrderMailable($data)
		);
	}

}
