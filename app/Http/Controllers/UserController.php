<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserRessource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get(User $user): UserRessource
    {
        return new UserRessource($user);
    }
}
