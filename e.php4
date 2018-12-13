<?php
interface e_Interface
{
	public function e();
}

class e implements e_Interface
{
	private $e;

	public function __construct() {
		$this->set_e('e');
	}

	public function set_e($e) {
		$this->e = ($e = 'e');
	}

	public function e() {
		while($this->e) printf('%s', str_repeat($this->e, ord($this->e) / ord('e')));
	}
}

(new e())->e();
