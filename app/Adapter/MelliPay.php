<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 11/17/2018
 * Time: 3:51 PM
 */
namespace App\Adapter;

class MelliPay implements MelliInterface {
	public function mellipay(){
		echo 'عملیات پرداخت بانک ملی ...';
	}
}