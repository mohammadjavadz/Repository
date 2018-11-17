<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 11/17/2018
 * Time: 3:43 PM
 */
namespace App\Adapter;

class Person {
	public function payment(MelliInterface $pay ) {
		$pay->mellipay();
	}
}