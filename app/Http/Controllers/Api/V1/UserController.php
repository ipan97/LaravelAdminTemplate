<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        return response()->ok([
            'profile' => User::profile(1)
        ]);
    }
}
