<?php
namespace FireUnion\MailStuff\Mailables;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMailable extends Mailable {

	use Queueable, SerializesModels;

	/**
	 * The template data.
	 *
	 * @var data
	 */
	public $data;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct(array $data) {
		$this->data = $data;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		return $this->view('fireunion.mailstuff::mail.order_template');
	}
}