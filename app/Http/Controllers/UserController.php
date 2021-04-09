<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addFriend($id) {

        $addUser = auth()->user()->friends()->attach([$id]);

        return [];
    }
}
