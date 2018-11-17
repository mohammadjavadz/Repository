<?php
/**
 * Created by PhpStorm.
 * User: MJ
 * Date: 11/17/2018
 * Time: 2:21 PM
 */
namespace App\Repository;

interface UserRepositoryInterface {
	public function find(int $id);
	public function insert(int $id, string $name);
}