<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        $user = User::all();
        $result = [
            'profile' => $user
        ];
        return response()->ok($result);
    }
}
