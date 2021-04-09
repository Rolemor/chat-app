<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUsers() {
        //TODO: decide between 2 option: 1.fetchall -> frontend filter 2.fetch with string -> backend filter
    }

    public function getFriends() {
        return auth()->user()->friends()->get();
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
