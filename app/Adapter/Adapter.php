<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 11/17/2018
 * Time: 3:56 PM
 */
namespace App\Adapter;

class Adapter implements MelliInterface {

	private $melat;
	public function __construct(MelatPay $melat) {
		$this->melat = $melat;
	}

	public function mellipay(){
		return $this->melat->melatpay();
	}
}
