<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 11/17/2018
 * Time: 3:54 PM
 */
namespace App\Adapter;

class MelatPay implements MelatInterface {
	public function melatpay(){
		echo 'عملیات پرداخت بانک ملت ....';
	}
}