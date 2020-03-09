<?php
namespace App\Repositories\DBRepositories;

use App\Repositories\Interfaces\UserRepositoryInterface as UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;

class DBUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
}