<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUsers() {
        //TODO
    }

    public function getFriends() {
        //TODO
    }

    public function toggleFriend($id) {
        $userFriends = auth()->user()->friends();

        if($userFriends->find($id)) {
            $userFriends->detach([$id]);
            return 'User Removed';
        }
        $userFriends->attach([$id]);
        return 'User Added';
    }
}
