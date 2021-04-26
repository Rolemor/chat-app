<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUsers() {
        //TODO: decide between 2 option: 1.fetchall -> frontend filter 2.fetch with string -> backend filter
    }

    public function getUserInfo() {
        return auth()->user()->id;
    }

    public function getFriendRequests() {
        return auth()->user()->friendRequests()->get();
    }

    public function addFriendRequest($id) {
        $userFriends = auth()->user()->friendRequests();
        $userFriendsOf = auth()->user()->friendRequestsOf();
        $userFriends->attach([$id]);
        $userFriendsOf->attach([$id]);
        return 'Request Added';
    }

    public function removeFriendRequest($id) {
        $userFriends = auth()->user()->friendRequests();
        $userFriendsOf = auth()->user()->friendRequestsOf();
        $userFriends->detach([$id]);
        $userFriendsOf->detach([$id]);
        return 'Request Removed';
    }

    public function getFriends() {
        return auth()->user()->friends()->get();
    }

    public function toggleFriend($id) {
        $userFriends = auth()->user()->friends();
        $userFriendsOf = auth()->user()->friendsOf();

        if($userFriends->find($id)) {
            $userFriends->detach([$id]);
            $userFriendsOf->detach([$id]);
            return 'User Removed';
        }
        $userFriends->attach([$id]);
        $userFriendsOf->attach([$id]);
        return 'User Added';
    }
}
