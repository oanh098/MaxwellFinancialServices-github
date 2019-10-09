<?php

namespace App\Http\Controllers;

use App\Holding;
use App\User;
use Illuminate\Http\Request;

class SavePivotController extends Controller
{
    public function store(Holding $holding, User $user)
    {
       // return auth()->user()->Holdings()->toggle($holding->id);
        return $user->Holdings()->toggle($holding->id);
        //return 'holdingId: '. $holding->id . ' userId: '. $user->id;

    }
}
