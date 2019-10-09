<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function store(User $user){

        return \auth()->user()->Holdings()->toggle($user);
    }
}
