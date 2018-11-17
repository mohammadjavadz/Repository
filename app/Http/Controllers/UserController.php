<?php

namespace App\Http\Controllers;




use App\Repository\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	protected $model;

	public function __construct(User $task)
	{
		$this->model = new UserRepository($task);
	}

	public function show( $id ) {
		return $this->model->find($id);
	}
}
