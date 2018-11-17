<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 11/17/2018
 * Time: 2:22 PM
 */
namespace App\Repository;
use App\User;


class UserRepository implements UserRepositoryInterface {
	private $model;
	public function __construct(User $model) {
		$this->model = $model;
	}
	public function find( int $id ) {
		$r = \App\User::find($id)->contacts;
		foreach ($r as $b){
			echo $b->name;
			echo '<br>';
		}
	}

	public function insert( int $id , string $name) {
		\App\User::find($id)->contacts()->create(['name'=>$name]);
		echo 'کانتکت جدید اضافه شد';
		echo '<br>';
		echo $name;
	}
}