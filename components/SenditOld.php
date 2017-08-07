<?php namespace FireUnion\MailStuff\Components;

use Cms\Classes\ComponentBase;
use Mail;

class SenditOld extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Sendit Old Component',
			'description' => 'Works in L5.1',
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

		Mail::queue('fireunion.mailstuff::mail.order_template', $data, function ($message) use ($recipient) {
			$message->to($recipient['email'], $recipient['name']);
		});
	}

}
